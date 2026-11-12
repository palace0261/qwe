'use strict';

const os = require('node:os');
const path = require('node:path');
const { chromium } = require('playwright');
const mysql = require('mysql2/promise');

const CHAT_URL = 'https://flow.team/messenger.act?room=NDQxMDc5OQ==&chat=&time=1794380926378&open_video=';
const ROOM_ID = '4410799';
const DATABASE = 'flowchat';
const PROFILE_DIR = path.join(process.env.LOCALAPPDATA || path.join(os.homedir(), '.local', 'share'), 'flow-chat-collector', 'browser-profile');
const INTERVAL_MS = 30000;
const HISTORY_WAIT_MS = 2500;
const MAX_SCROLLS = 10000;

async function extractMessages(page) {
  return page.evaluate(() => {
    const list = document.querySelector('#messengerUl');
    if (!list) throw new Error('채팅 목록을 찾지 못했습니다. 로그인 상태와 화면 구조를 확인하세요.');
    return [...list.querySelectorAll(':scope > li[id^="message-"]')]
      .filter(row => row.getClientRects().length > 0)
      .map(row => ({
        id: row.getAttribute('room_chat_srno'),
        roomId: row.getAttribute('room-srno'),
        senderId: row.getAttribute('rgsr_id'),
        senderName: row.getAttribute('rgsr_nm'),
        timestamp: row.getAttribute('rgsn_dttm'),
        type: row.getAttribute('msg_gb') || '',
        ephemeral: row.getAttribute('bomb_yn') === 'Y',
        content: row.querySelector('.js-contents.chat-txt-contents')?.innerText.trim() || '',
      }));
  });
}

function validateMessage(message) {
  if (!/^\d+$/.test(message.id || '') || message.roomId !== ROOM_ID) {
    throw new Error('메시지 ID 또는 채팅방 ID가 올바르지 않습니다. 화면 구조를 확인하세요.');
  }
  if (!/^\d{14}$/.test(message.timestamp || '')) {
    throw new Error(`메시지 ${message.id}의 작성 시각이 올바르지 않습니다.`);
  }
  const t = message.timestamp;
  return {
    ...message,
    timestamp: `${t.slice(0, 4)}-${t.slice(4, 6)}-${t.slice(6, 8)} ${t.slice(8, 10)}:${t.slice(10, 12)}:${t.slice(12, 14)}`,
  };
}

async function connectDatabase() {
  const connection = await mysql.createConnection({
    host: process.env.FLOW_DB_HOST || '127.0.0.1',
    port: Number(process.env.FLOW_DB_PORT || 3306),
    user: process.env.FLOW_DB_USER || 'root',
    password: process.env.FLOW_DB_PASSWORD || '',
    charset: 'utf8mb4',
    connectTimeout: 10000,
  });
  try {
    await connection.query(`CREATE DATABASE IF NOT EXISTS \`${DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci`);
    await connection.query(`USE \`${DATABASE}\``);
    await connection.query(`
      CREATE TABLE IF NOT EXISTS messages (
        room_id VARCHAR(32) NOT NULL,
        message_id VARCHAR(32) NOT NULL,
        sender_id VARCHAR(255) NULL,
        sender_name VARCHAR(255) NULL,
        sent_at DATETIME NOT NULL,
        message_type VARCHAR(32) NOT NULL,
        content MEDIUMTEXT NOT NULL,
        last_seen_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (room_id, message_id),
        KEY sent_at_idx (sent_at)
      ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
    `);
    return connection;
  } catch (error) {
    await connection.end();
    throw error;
  }
}

async function saveMessages(connection, messages) {
  let saved = 0;
  let skipped = 0;
  for (const raw of messages) {
    const message = validateMessage(raw);
    if (message.ephemeral || !message.content) {
      skipped++;
      continue;
    }
    await connection.execute(`
      INSERT INTO messages (room_id, message_id, sender_id, sender_name, sent_at, message_type, content)
      VALUES (?, ?, ?, ?, ?, ?, ?)
      ON DUPLICATE KEY UPDATE sender_id = VALUES(sender_id), sender_name = VALUES(sender_name),
        sent_at = VALUES(sent_at), message_type = VALUES(message_type), content = VALUES(content)
    `, [message.roomId, message.id, message.senderId, message.senderName, message.timestamp, message.type, message.content]);
    saved++;
  }
  return { saved, skipped };
}

async function collectHistory(page, connection) {
  const seen = new Set();
  let skipped = 0;
  let unchanged = 0;
  let previousFirst = null;
  for (let attempt = 0; attempt < MAX_SCROLLS; attempt++) {
    const messages = await extractMessages(page);
    const result = await saveMessages(connection, messages);
    skipped += result.skipped;
    for (const message of messages) seen.add(message.id);
    const first = messages[0]?.id || null;
    unchanged = first === previousFirst ? unchanged + 1 : 0;
    previousFirst = first;
    if (unchanged >= 3) {
      console.log(`수집 완료: ${seen.size}개 메시지 확인 (빈 메시지/일회성 메시지는 저장 제외).`);
      if (skipped) console.warn('빈 메시지 또는 일회성 메시지가 있어 일부 내용을 저장하지 않았습니다.');
      console.warn('더 오래된 메시지 로딩이 멈췄습니다. 플로우가 전체 기록을 제공했는지는 별도 확인이 필요합니다.');
      return;
    }
    const list = page.locator('#messengerUl');
    await list.hover();
    await list.evaluate(element => { element.scrollTop = 0; });
    await page.mouse.wheel(0, -1500);
    await page.waitForTimeout(HISTORY_WAIT_MS);
  }
  throw new Error('이전 메시지 수집이 최대 스크롤 횟수에 도달해 중단되었습니다.');
}

async function openRoom(page) {
  await page.goto(CHAT_URL, { waitUntil: 'domcontentloaded' });
  if (!await page.locator('#messengerUl').isVisible({ timeout: 5000 }).catch(() => false)) {
    console.log('열린 Chrome 창에서 플로우에 직접 로그인해 주세요. 최대 5분 기다립니다.');
    await page.goto('https://flow.team/signin.act', { waitUntil: 'domcontentloaded' });
    await page.waitForURL(url => url.hostname === 'flow.team' && !/signin|login|errorpage/.test(url.pathname), { timeout: 300000 });
    await page.goto(CHAT_URL, { waitUntil: 'domcontentloaded' });
  }
  await page.locator('#messengerUl').waitFor({ state: 'visible', timeout: 30000 });
}

async function main() {
  const mode = process.argv[2];
  if (!['--once', '--watch'].includes(mode)) throw new Error('사용법: npm run once 또는 npm run watch');
  const connection = await connectDatabase();
  let context;
  try {
    context = await chromium.launchPersistentContext(PROFILE_DIR, { channel: 'chrome', headless: false });
    const page = context.pages()[0] || await context.newPage();
    await openRoom(page);
    do {
      await collectHistory(page, connection);
      if (mode === '--watch') {
        console.log('30초 후 다시 확인합니다. 종료하려면 Ctrl+C를 누르세요.');
        await page.waitForTimeout(INTERVAL_MS);
        await openRoom(page);
      }
    } while (mode === '--watch');
  } finally {
    if (context) await context.close();
    await connection.end();
  }
}

if (require.main === module) {
  main().catch(error => {
    console.error(`수집 실패: ${error.message}`);
    process.exitCode = 1;
  });
}

module.exports = { extractMessages, validateMessage, saveMessages, collectHistory };

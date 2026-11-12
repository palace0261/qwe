// Puppeteer로 main/wsl/main.html을 고해상도 캡처해 프로젝트 루트에 output.png로 저장
const path = require('path');
const puppeteer = require('puppeteer');

const TARGET_HTML = path.join(__dirname, '..', 'main', 'wsl', 'main.html');
const OUTPUT_PATH = path.join(__dirname, '..', 'output.png');

(async () => {
  const browser = await puppeteer.launch();
  try {
    const page = await browser.newPage();
    await page.setViewport({ width: 1200, height: 800, deviceScaleFactor: 3 });

    await page.goto('file:///' + TARGET_HTML.replace(/\\/g, '/'), { waitUntil: 'networkidle0' });

    await page.screenshot({ path: OUTPUT_PATH, fullPage: true });
    console.log('완료! ' + OUTPUT_PATH);
  } finally {
    await browser.close();
  }
})().catch((err) => {
  console.error('캡처 실패:', err);
  process.exit(1);
});
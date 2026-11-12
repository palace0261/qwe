<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Tiến Lên Crad Game</title>
  <style>
    :root {
      --bg: #08111f;
      --bg-2: #111d35;
      --panel: rgba(15, 25, 42, 0.82);
      --panel-2: rgba(25, 37, 60, 0.9);
      --line: rgba(255, 255, 255, 0.12);
      --text: #f5f7fb;
      --muted: #a8b4cf;
      --accent: #f2c14e;
      --accent-2: #56cfe1;
      --danger: #ff6b6b;
      --success: #68d391;
      --black: #121826;
      --red: #ff5d73;
      --shadow: 0 24px 80px rgba(0, 0, 0, 0.35);
      --radius: 22px;
    }

    * { box-sizing: border-box; }

    html, body { height: 100%; }

    body {
      margin: 0;
      font-family: "Segoe UI", "Apple SD Gothic Neo", "Noto Sans KR", sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at top left, rgba(86, 207, 225, 0.24), transparent 30%),
        radial-gradient(circle at top right, rgba(242, 193, 78, 0.18), transparent 22%),
        linear-gradient(160deg, var(--bg), var(--bg-2));
      overflow-x: hidden;
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background-image: linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
      background-size: 48px 48px;
      mask-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.55), transparent 80%);
      pointer-events: none;
    }

    .app {
      width: min(1300px, calc(100% - 24px));
      margin: 0 auto;
      padding: 20px 0 32px;
    }

    .hero {
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 18px;
      align-items: stretch;
      margin-bottom: 18px;
    }

    .panel {
      background: linear-gradient(180deg, rgba(20, 29, 49, 0.96), rgba(11, 18, 31, 0.88));
      border: 1px solid var(--line);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      backdrop-filter: blur(18px);
    }

    .title-panel {
      padding: 26px;
      overflow: hidden;
      position: relative;
    }

    .title-panel::after {
      content: "";
      position: absolute;
      right: -80px;
      top: -80px;
      width: 260px;
      height: 260px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(242, 193, 78, 0.35), transparent 68%);
      filter: blur(4px);
    }

    h1 {
      margin: 0 0 8px;
      font-size: clamp(2rem, 4vw, 3.5rem);
      line-height: 1.05;
      letter-spacing: -0.03em;
    }

    .subtitle {
      max-width: 62ch;
      margin: 0;
      color: var(--muted);
      line-height: 1.6;
    }

    .pill-row {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 18px;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #dfe7ff;
      font-size: 0.92rem;
    }

    .status-panel {
      padding: 18px;
      display: grid;
      gap: 12px;
      align-content: start;
    }

    .status-card {
      padding: 16px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .status-label {
      font-size: 0.82rem;
      color: var(--muted);
      margin-bottom: 6px;
      letter-spacing: 0.02em;
      text-transform: uppercase;
    }

    .status-value {
      font-size: 1.03rem;
      line-height: 1.45;
    }

    .layout {
      display: grid;
      grid-template-columns: 1fr 340px;
      gap: 18px;
      align-items: start;
    }

    .board {
      padding: 18px;
    }

    .settings {
      padding: 18px;
      display: grid;
      gap: 16px;
      position: sticky;
      top: 18px;
    }

    .section-title {
      margin: 0 0 10px;
      font-size: 1.02rem;
      letter-spacing: 0.01em;
    }

    .button-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
    }

    .choice {
      border: 1px solid rgba(255, 255, 255, 0.1);
      background: rgba(255, 255, 255, 0.05);
      color: var(--text);
      border-radius: 16px;
      padding: 13px 12px;
      font: inherit;
      cursor: pointer;
      transition: transform 0.18s ease, background 0.18s ease, border-color 0.18s ease;
    }

    .choice:hover {
      transform: translateY(-1px);
      border-color: rgba(242, 193, 78, 0.45);
    }

    .choice.active {
      background: linear-gradient(180deg, rgba(242, 193, 78, 0.24), rgba(86, 207, 225, 0.16));
      border-color: rgba(242, 193, 78, 0.55);
      box-shadow: 0 10px 25px rgba(242, 193, 78, 0.12);
    }

    .primary {
      width: 100%;
      border: 0;
      border-radius: 16px;
      padding: 14px 16px;
      font: inherit;
      font-weight: 700;
      cursor: pointer;
      color: #101728;
      background: linear-gradient(135deg, #f2c14e, #f9de8b);
      box-shadow: 0 14px 30px rgba(242, 193, 78, 0.22);
    }

    .primary:disabled,
    .choice:disabled,
    .secondary:disabled {
      opacity: 0.5;
      cursor: not-allowed;
      transform: none;
    }

    .secondary {
      width: 100%;
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 16px;
      padding: 13px 16px;
      font: inherit;
      font-weight: 600;
      cursor: pointer;
      color: var(--text);
      background: rgba(255, 255, 255, 0.05);
    }

    .table {
      border-radius: 24px;
      padding: 18px;
      background:
        radial-gradient(circle at top, rgba(86, 207, 225, 0.12), transparent 35%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .players {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 12px;
      margin-bottom: 16px;
    }

    .player-card {
      padding: 14px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.08);
      min-height: 96px;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .player-card.active {
      border-color: rgba(86, 207, 225, 0.6);
      box-shadow: 0 0 0 1px rgba(86, 207, 225, 0.15) inset;
    }

    .player-card.passed {
      opacity: 0.5;
    }

    .player-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
    }

    .player-name {
      font-weight: 700;
    }

    .player-badge {
      font-size: 0.8rem;
      color: var(--muted);
    }

    .cards-left {
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--accent);
    }

    .table-center {
      display: grid;
      gap: 14px;
    }

    .last-play {
      display: grid;
      gap: 10px;
      padding: 16px;
      border-radius: 18px;
      background: rgba(0, 0, 0, 0.18);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .last-play-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      color: var(--muted);
      font-size: 0.92rem;
    }

    .card-row {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      min-height: 74px;
    }

    .card {
      width: 58px;
      height: 84px;
      border-radius: 14px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(245, 248, 255, 0.92));
      color: #121826;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 8px 8px 6px;
      font-weight: 800;
      box-shadow: 0 14px 24px rgba(0, 0, 0, 0.2);
      position: relative;
      user-select: none;
    }

    .card.red { color: var(--red); }
    .card.black { color: var(--black); }
    .card.small {
      width: 46px;
      height: 64px;
      border-radius: 12px;
      padding: 6px 6px 4px;
      font-size: 0.78rem;
    }

    .card .top,
    .card .bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      line-height: 1;
    }

    .card .rank {
      font-size: 0.95rem;
    }

    .card .suit {
      font-size: 1rem;
    }

    .card .center {
      font-size: 1.4rem;
      text-align: center;
      line-height: 1;
    }

    .card.selected {
      transform: translateY(-12px);
      border-color: rgba(242, 193, 78, 0.9);
      box-shadow: 0 18px 28px rgba(242, 193, 78, 0.16);
    }

    .card.back {
      background: linear-gradient(135deg, #12233f, #24476f 55%, #152845);
      color: transparent;
      border-color: rgba(255, 255, 255, 0.16);
      position: relative;
      overflow: hidden;
    }

    .card.back::before {
      content: "";
      position: absolute;
      inset: 10px;
      border-radius: 10px;
      border: 1px dashed rgba(255, 255, 255, 0.35);
      background: radial-gradient(circle at center, rgba(242, 193, 78, 0.35), transparent 42%);
    }

    .controls {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .hand-panel {
      margin-top: 16px;
      padding: 16px;
      border-radius: 18px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hand-head {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 14px;
      margin-bottom: 12px;
    }

    .hand-head small {
      color: var(--muted);
    }

    .hand {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      min-height: 110px;
    }

    .message {
      min-height: 24px;
      color: #d8e3ff;
      font-size: 0.96rem;
    }

    .message.error { color: #ff9c9c; }
    .message.success { color: #9af0b2; }

    .log {
      max-height: 240px;
      overflow: auto;
      padding-right: 4px;
      display: grid;
      gap: 10px;
    }

    .log-item {
      padding: 12px 14px;
      border-radius: 14px;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: #dfe7ff;
      line-height: 1.45;
    }

    .hidden { display: none !important; }

    .game-over {
      position: fixed;
      inset: 0;
      display: grid;
      place-items: center;
      background: rgba(4, 8, 16, 0.72);
      backdrop-filter: blur(10px);
      padding: 18px;
      z-index: 30;
    }

    .game-over-card {
      width: min(520px, 100%);
      padding: 26px;
      border-radius: 24px;
      border: 1px solid rgba(255, 255, 255, 0.12);
      background: linear-gradient(180deg, rgba(25, 37, 60, 0.98), rgba(10, 17, 28, 0.95));
      box-shadow: var(--shadow);
      text-align: center;
    }

    .game-over-card h2 {
      margin: 0 0 10px;
      font-size: 1.8rem;
    }

    .game-over-card p {
      margin: 0 0 18px;
      color: var(--muted);
      line-height: 1.6;
    }

    .rules {
      display: grid;
      gap: 8px;
      color: var(--muted);
      font-size: 0.92rem;
      line-height: 1.55;
    }

    .rules strong { color: #eff4ff; }

    @media (max-width: 1080px) {
      .hero, .layout {
        grid-template-columns: 1fr;
      }

      .settings {
        position: static;
      }
    }

    @media (max-width: 640px) {
      .app { width: min(100% - 14px, 1300px); }
      .title-panel, .board, .settings { padding: 16px; }
      .button-grid, .controls { grid-template-columns: 1fr; }
      .card { width: 50px; height: 74px; }
      .card.small { width: 40px; height: 58px; }
      .hand { gap: 6px; }
    }
  </style>
</head>
<body>
  <div class="app">
    <section class="hero">
      <div class="panel title-panel">
        <h1>Tiến Lên Crad Game</h1>
        <p class="subtitle">
          52장의 카드를 섞어 2~4인으로 나누고, 3♠를 가진 플레이어가 첫 턴을 시작합니다.
          같은 숫자 페어, 트리플, 같은 무늬의 스트레이트, 4장 폭탄을 사용해 손패를 먼저 비워 보세요.
        </p>
        <div class="pill-row">
          <span class="pill">3이 가장 낮음</span>
          <span class="pill">2는 마지막에 보류</span>
          <span class="pill">패스 후 다음 라운드 참여</span>
          <span class="pill">AI 난이도 선택 가능</span>
        </div>
      </div>

      <div class="panel status-panel">
        <div class="status-card">
          <div class="status-label">현재 턴</div>
          <div class="status-value" id="turnText">게임을 시작하세요</div>
        </div>
        <div class="status-card">
          <div class="status-label">최근 낸 카드</div>
          <div class="status-value" id="lastPlayText">없음</div>
        </div>
        <div class="status-card">
          <div class="status-label">상태</div>
          <div class="status-value" id="gameText">플레이 수와 난이도를 선택한 뒤 시작합니다.</div>
        </div>
      </div>
    </section>

    <section class="layout">
      <div class="panel board">
        <div class="table">
          <div class="players" id="playersArea"></div>

          <div class="table-center">
            <div class="last-play">
              <div class="last-play-head">
                <span>테이블</span>
                <span id="roundInfo">대기 중</span>
              </div>
              <div class="card-row" id="tableCards"></div>
            </div>

            <div class="controls">
              <button class="secondary" id="playBtn">내기</button>
              <button class="secondary" id="passBtn">패스</button>
            </div>

            <div class="message" id="messageArea"></div>
          </div>
        </div>

        <div class="hand-panel">
          <div class="hand-head">
            <div>
              <strong>내 손패</strong><br>
              <small>카드를 클릭해 선택한 뒤 내기를 누르세요.</small>
            </div>
            <small id="handCountText">0장</small>
          </div>
          <div class="hand" id="handArea"></div>
        </div>
      </div>

      <aside class="panel settings">
        <div>
          <h3 class="section-title">플레이 수 선택</h3>
          <div class="button-grid" id="playerCountButtons">
            <button class="choice active" data-count="2">2인 플레이</button>
            <button class="choice" data-count="3">3인 플레이</button>
            <button class="choice" data-count="4">4인 플레이</button>
          </div>
        </div>

        <div>
          <h3 class="section-title">난이도 선택</h3>
          <div class="button-grid" id="difficultyButtons">
            <button class="choice" data-difficulty="easy">쉬움</button>
            <button class="choice active" data-difficulty="normal">보통</button>
            <button class="choice" data-difficulty="hard">어려움</button>
          </div>
        </div>

        <button class="primary" id="startBtn">게임 시작</button>

        <div class="rules">
          <strong>족보</strong>
          <span>• 같은 숫자 + 같은 색상 2장 페어</span>
          <span>• 같은 숫자 3장 트리플</span>
          <span>• 같은 무늬의 연속 3장 이상 스트레이트</span>
          <span>• 같은 숫자 4장 폭탄</span>
          <strong>기본 규칙</strong>
          <span>• 3♠를 가진 사람이 첫 턴을 가집니다.</span>
          <span>• 게임은 1장씩 내는 매 턴과 매 라운드마다 같은 모양과 같은 색상만 낼 수 있어.</span>
          <span>• 예: 하트3을 내면 하트6, 하트A처럼 같은 모양과 같은 색상만 낼 수 있습니다.</span>
          <span>• 예: 같은 숫자여도 다른 모양은 불가이고, 2장이나 3장으로는 1장 대응이 불가합니다.</span>
          <span>• 2장 이상 라운드에서는 같은 족보 종류와 같은 장수로만 대응할 수 있습니다.</span>
          <span>• 예: 2장의 같은 숫자 같은 색상 페어는 2장의 같은 숫자 같은 색상 페어로만 이길 수 있습니다.</span>
          <span>• 예: 다른 색상의 2장이나 3장으로는 위 페어를 이길 수 없습니다.</span>
          <span>• 예: 1이 하트3을 내고 2가 하트6을 내고 3이 패스하면 3은 그 라운드에서 제외됩니다.</span>
          <span>• 이후 가장 높은 카드를 낸 사람에게 다른 플레이어들이 모두 패스하면 새 라운드가 열리고, 제외됐던 플레이어도 다시 참여합니다.</span>
          <span>• 모두 패스하면 마지막으로 낸 사람이 새 라운드를 엽니다.</span>
          <span>• 새 라운드에서는 아무 카드나 낼 수 있습니다.</span>
        </div>

        <div>
          <h3 class="section-title">진행 로그</h3>
          <div class="log" id="logArea"></div>
        </div>
      </aside>
    </section>
  </div>

  <div class="game-over hidden" id="gameOverLayer">
    <div class="game-over-card">
      <h2 id="gameOverTitle">게임 종료</h2>
      <p id="gameOverText"></p>
      <button class="primary" id="restartBtn">다시 시작</button>
    </div>
  </div>

  <div id="freshRoundBanner" class="hidden" style="position:fixed;left:50%;transform:translateX(-50%);top:22px;z-index:40;"> 
    <div style="padding:12px 18px;border-radius:12px;background:linear-gradient(90deg,#56cfe1,#f2c14e);color:#08111f;font-weight:700;box-shadow:0 10px 30px rgba(0,0,0,0.35);">새 라운드 시작 — 제외된 플레이어가 복귀합니다</div>
  </div>

  <script>
    const RANKS = ['3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '2'];
    const SUITS = [
      { name: 'spade', symbol: '♠', color: 'black' },
      { name: 'club', symbol: '♣', color: 'black' },
      { name: 'diamond', symbol: '♦', color: 'red' },
      { name: 'heart', symbol: '♥', color: 'red' },
    ];

    const state = {
      playerCount: 2,
      difficulty: 'normal',
      started: false,
      gameOver: false,
      players: [],
      humanIndex: 0,
      currentPlayer: 0,
      starterIndex: 0,
      lastPlay: null,
      selected: new Set(),
      firstMove: true,
      roundPasses: [],
      aiTimer: null,
    };

    const el = {
      turnText: document.getElementById('turnText'),
      lastPlayText: document.getElementById('lastPlayText'),
      gameText: document.getElementById('gameText'),
      roundInfo: document.getElementById('roundInfo'),
      playersArea: document.getElementById('playersArea'),
      tableCards: document.getElementById('tableCards'),
      handArea: document.getElementById('handArea'),
      handCountText: document.getElementById('handCountText'),
      messageArea: document.getElementById('messageArea'),
      logArea: document.getElementById('logArea'),
      startBtn: document.getElementById('startBtn'),
      playBtn: document.getElementById('playBtn'),
      passBtn: document.getElementById('passBtn'),
      restartBtn: document.getElementById('restartBtn'),
      gameOverLayer: document.getElementById('gameOverLayer'),
      gameOverTitle: document.getElementById('gameOverTitle'),
      gameOverText: document.getElementById('gameOverText'),
      playerCountButtons: document.getElementById('playerCountButtons'),
      difficultyButtons: document.getElementById('difficultyButtons'),
    };

    function createDeck() {
      const deck = [];
      let id = 0;
      for (let rankIndex = 0; rankIndex < RANKS.length; rankIndex += 1) {
        for (let suitIndex = 0; suitIndex < SUITS.length; suitIndex += 1) {
          deck.push({
            id: `c${id += 1}`,
            rankIndex,
            suitIndex,
            rank: RANKS[rankIndex],
            suit: SUITS[suitIndex].name,
            symbol: SUITS[suitIndex].symbol,
            color: SUITS[suitIndex].color,
          });
        }
      }

      for (let i = deck.length - 1; i > 0; i -= 1) {
        const j = Math.floor(Math.random() * (i + 1));
        [deck[i], deck[j]] = [deck[j], deck[i]];
      }

      return deck;
    }

    function sortCards(cards) {
      return cards.slice().sort((a, b) => {
        if (a.rankIndex !== b.rankIndex) return a.rankIndex - b.rankIndex;
        return a.suitIndex - b.suitIndex;
      });
    }

    function formatCard(card) {
      return `${card.rank}${card.symbol}`;
    }

    function getPlayerName(index) {
      return index === 0 ? '나' : `AI ${index}`;
    }

    function buildPlayers(count) {
      const players = [];
      for (let i = 0; i < count; i += 1) {
        players.push({
          name: getPlayerName(i),
          isHuman: i === 0,
          hand: [],
          passed: false,
        });
      }
      return players;
    }

    function shuffleAndDeal() {
      const deck = createDeck();
      const players = buildPlayers(state.playerCount);

      const usedCount = state.playerCount * 13;
      const threeSpadeIndex = deck.findIndex((card) => card.rankIndex === 0 && card.suitIndex === 0);
      if (threeSpadeIndex >= usedCount) {
        [deck[threeSpadeIndex], deck[usedCount - 1]] = [deck[usedCount - 1], deck[threeSpadeIndex]];
      }

      for (let i = 0; i < usedCount; i += 1) {
        players[i % state.playerCount].hand.push(deck[i]);
      }

      players.forEach((player) => {
        player.hand = sortCards(player.hand);
      });

      state.players = players;
      state.humanIndex = 0;
      state.starterIndex = players.findIndex((player) => player.hand.some((card) => card.rankIndex === 0 && card.suitIndex === 0));
      if (state.starterIndex === -1) state.starterIndex = 0;
      state.currentPlayer = state.starterIndex;
      state.lastPlay = null;
      state.selected = new Set();
      state.firstMove = true;
      state.roundPasses = new Array(state.playerCount).fill(false);
      state.players.forEach((player) => {
        player.passed = false;
      });
      state.started = true;
      state.gameOver = false;
    }

    function getCardById(cardId) {
      for (const player of state.players) {
        const found = player.hand.find((card) => card.id === cardId);
        if (found) return found;
      }
      return null;
    }

    function getSelectedCards() {
      const human = state.players[state.humanIndex];
      return sortCards(human.hand.filter((card) => state.selected.has(card.id)));
    }

    function sameRank(cards) {
      return cards.every((card) => card.rankIndex === cards[0].rankIndex);
    }

    function sameSuit(cards) {
      return cards.every((card) => card.suitIndex === cards[0].suitIndex);
    }

    function isConsecutive(cards) {
      for (let i = 1; i < cards.length; i += 1) {
        if (cards[i].rankIndex !== cards[i - 1].rankIndex + 1) return false;
      }
      return true;
    }

    function evaluateCombo(cards) {
      const sorted = sortCards(cards);
      if (sorted.length === 0) return null;

      if (sorted.length === 1) {
        return { type: 'single', rank: sorted[0].rankIndex, length: 1, suitIndex: sorted[0].suitIndex, color: sorted[0].color, cards: sorted };
      }

      if (sorted.length === 2 && sameRank(sorted) && sorted[0].color === sorted[1].color) {
        return { type: 'pair', rank: sorted[0].rankIndex, length: 2, cards: sorted };
      }

      if (sorted.length === 3 && sameRank(sorted)) {
        return { type: 'triple', rank: sorted[0].rankIndex, length: 3, cards: sorted };
      }

      if (sorted.length === 4 && sameRank(sorted)) {
        return { type: 'bomb', rank: sorted[0].rankIndex, length: 4, cards: sorted };
      }

      if (sorted.length >= 3 && sameSuit(sorted) && isConsecutive(sorted) && sorted.every((card) => card.rankIndex !== 12)) {
        return { type: 'straight', rank: sorted[sorted.length - 1].rankIndex, length: sorted.length, suitIndex: sorted[0].suitIndex, cards: sorted };
      }

      return null;
    }

    function comboSummary(combo) {
      if (!combo) return '없음';
      return `${combo.type} · ${combo.cards.map(formatCard).join(' ')}`;
    }

    function usesTwo(combo) {
      return combo.cards.some((card) => card.rankIndex === 12);
    }

    // Returns true if playing `combo` by `playerIndex` would leave that
    // player with a single remaining card which is a 2 (rankIndex === 12).
    function wouldLeaveLastTwo(playerIndex, combo) {
      const player = state.players[playerIndex];
      const playedIds = new Set(combo.cards.map((c) => c.id));
      const remaining = player.hand.filter((c) => !playedIds.has(c.id));
      return remaining.length === 1 && remaining[0].rankIndex === 12;
    }

    function compareComboStrength(a, b) {
      const priority = { single: 1, pair: 2, triple: 3, straight: 4, bomb: 5 };
      if (priority[a.type] !== priority[b.type]) return priority[a.type] - priority[b.type];
      if (a.type === 'straight') {
        if (a.length !== b.length) return a.length - b.length;
        if (a.rank !== b.rank) return a.rank - b.rank;
        return a.suitIndex - b.suitIndex;
      }
      if (a.rank !== b.rank) return a.rank - b.rank;
      return a.length - b.length;
    }

    function canBeat(candidate, lastPlay, playerIndex) {
      if (!candidate) return false;

      if (state.firstMove && playerIndex === state.starterIndex) {
        return candidate.cards.some((card) => card.rankIndex === 0 && card.suitIndex === 0);
      }

      if (!lastPlay) return true;

      if (candidate.type === 'bomb') {
        if (lastPlay.type !== 'bomb') return true;
        return candidate.rank > lastPlay.rank;
      }

      if (lastPlay.type === 'bomb') return false;
      if (lastPlay.type === 'single') {
        if (candidate.type !== 'single') return false;
        // If candidate is a 2 and lastPlay is not a 2, candidate wins regardless of suit/color
        if (candidate.rank === 12 && lastPlay.rank !== 12) return true;
        // If both are 2, compare by suit order: club < spade < diamond < heart
        if (candidate.rank === 12 && lastPlay.rank === 12) {
          // suit order: spade(0) < club(1) < diamond(2) < heart(3)
          return candidate.suitIndex > lastPlay.suitIndex;
        }
        // If lastPlay is 2 and candidate is not, candidate cannot beat
        if (lastPlay.rank === 12 && candidate.rank !== 12) return false;
        // Otherwise (neither is 2): must be same suit and same color and higher rank
        return candidate.suitIndex === lastPlay.suitIndex && candidate.color === lastPlay.color && candidate.rank > lastPlay.rank;
      }

      if (candidate.type !== lastPlay.type || candidate.length !== lastPlay.length) return false;

      if (candidate.type === 'straight') {
        return candidate.length === lastPlay.length && candidate.rank > lastPlay.rank;
      }

      return candidate.rank > lastPlay.rank;
    }

    function generateCombos(hand) {
      const combos = [];
      const sorted = sortCards(hand);

      sorted.forEach((card) => {
        combos.push({ type: 'single', rank: card.rankIndex, length: 1, suitIndex: card.suitIndex, color: card.color, cards: [card] });
      });

      for (let rankIndex = 0; rankIndex < RANKS.length; rankIndex += 1) {
        const sameRankCards = sorted.filter((card) => card.rankIndex === rankIndex);

        const black = sameRankCards.filter((card) => card.color === 'black');
        if (black.length >= 2) {
          combos.push({ type: 'pair', rank: rankIndex, length: 2, cards: sortCards(black.slice(0, 2)) });
        }

        const red = sameRankCards.filter((card) => card.color === 'red');
        if (red.length >= 2) {
          combos.push({ type: 'pair', rank: rankIndex, length: 2, cards: sortCards(red.slice(0, 2)) });
        }

        if (sameRankCards.length >= 3) {
          const triples = chooseCards(sameRankCards, 3);
          triples.forEach((cards) => combos.push({ type: 'triple', rank: rankIndex, length: 3, cards: sortCards(cards) }));
        }

        if (sameRankCards.length === 4) {
          combos.push({ type: 'bomb', rank: rankIndex, length: 4, cards: sortCards(sameRankCards) });
        }
      }

      for (let suitIndex = 0; suitIndex < SUITS.length; suitIndex += 1) {
        const cards = sorted.filter((card) => card.suitIndex === suitIndex && card.rankIndex !== 12);
        const runStarts = [];

        for (let start = 0; start < cards.length; start += 1) {
          let run = [cards[start]];
          for (let end = start + 1; end < cards.length; end += 1) {
            if (cards[end].rankIndex !== cards[end - 1].rankIndex + 1) break;
            run.push(cards[end]);
            if (run.length >= 3) {
              runStarts.push(run.slice());
            }
          }
        }

        runStarts.forEach((run) => {
          combos.push({ type: 'straight', rank: run[run.length - 1].rankIndex, length: run.length, suitIndex, cards: sortCards(run) });
        });
      }

      const unique = new Map();
      combos.forEach((combo) => {
        const key = `${combo.type}:${combo.length}:${combo.rank}:${combo.suitIndex ?? 'x'}:${combo.cards.map((card) => card.id).join('-')}`;
        unique.set(key, combo);
      });
      return Array.from(unique.values());
    }

    function chooseCards(cards, size, start = 0, picked = [], result = []) {
      if (picked.length === size) {
        result.push(picked.slice());
        return result;
      }

      for (let i = start; i < cards.length; i += 1) {
        picked.push(cards[i]);
        chooseCards(cards, size, i + 1, picked, result);
        picked.pop();
      }

      return result;
    }

    function getLegalMoves(playerIndex) {
      const hand = state.players[playerIndex].hand;
      const combos = generateCombos(hand);
      return combos.filter((combo) => canBeat(combo, state.lastPlay, playerIndex));
    }

    function scoreMove(move, mode, isLead) {
      const baseType = { single: 1, pair: 2, triple: 3, straight: 4, bomb: 5 };
      let score = 0;

      if (mode === 'easy') {
        score = baseType[move.type] * 100 + move.rank * 5 + move.length;
        if (usesTwo(move)) score += 320; // strong penalty on easy
        if (move.type === 'bomb') score += 200;
      } else if (mode === 'normal') {
        score = move.length * 16 + baseType[move.type] * 5 + move.rank;
        if (usesTwo(move)) score += 100; // moderate penalty on normal
        if (move.type === 'bomb') score += 260;
        if (isLead) score -= move.length * 12;
      } else {
        // Hard mode: prefer reducing hand quickly, avoid spending 2s and bombs
        score = move.length * 30 - move.rank * 6 - baseType[move.type] * 6;
        // Penalize using 2 unless it's finishing move (handled in chooseAiMove)
        if (usesTwo(move)) score += 400;
        // Bombs are powerful but keep for later unless they significantly reduce hand
        if (move.type === 'bomb') score += 220;
        if (isLead) score -= move.length * 8; // slightly prefer longer leads
      }

      return score;
    }

    function chooseAiMove(playerIndex) {
      const legal = getLegalMoves(playerIndex);
      if (legal.length === 0) return null;

      const isLead = !state.lastPlay;
      const mode = state.difficulty;

      if (isLead) {
        if (mode === 'hard') {
          // Hard lead: prefer longer combos (straights, triples, pairs) to reduce hand quickly,
          // avoid using 2s and bombs when possible.
          const pref = ['straight', 'triple', 'pair', 'single'];
          for (const type of pref) {
            let pool = legal.filter((mv) => mv.type === type && !usesTwo(mv) && mv.type !== 'bomb');
            if (pool.length === 0) pool = legal.filter((mv) => mv.type === type && !usesTwo(mv));
            if (pool.length === 0) continue;

            // avoid leaving a 2 as last card
            let safe = pool.filter((mv) => !wouldLeaveLastTwo(playerIndex, mv));
            if (safe.length === 0) safe = pool;

            safe.sort((a, b) => scoreMove(b, mode, isLead) - scoreMove(a, mode, isLead) || compareComboStrength(b, a));
            return safe[0];
          }

          legal.sort((a, b) => scoreMove(b, mode, isLead) - scoreMove(a, mode, isLead) || compareComboStrength(b, a));
          return legal[0];
        }

        // Default (easy/normal) behavior: low single non-2 as before
        let leadPool = legal.filter((move) => move.type === 'single' && move.rank !== 12);
        if (leadPool.length === 0) {
          leadPool = legal.filter((move) => move.type === 'single');
        }
        if (leadPool.length === 0) {
          legal.sort((a, b) => scoreMove(a, mode, isLead) - scoreMove(b, mode, isLead) || compareComboStrength(a, b));
          return legal[0];
        }

        let safeLead = leadPool.filter((mv) => !wouldLeaveLastTwo(playerIndex, mv));
        if (safeLead.length === 0) safeLead = leadPool;

        safeLead.sort((a, b) => {
          if (a.rank !== b.rank) return a.rank - b.rank;
          if (a.length !== b.length) return a.length - b.length;
          return (a.suitIndex ?? 0) - (b.suitIndex ?? 0);
        });

        return safeLead[0];
      }
      let pool = legal.slice();

      // If any move wins immediately, take it.
      const winning = pool.find((mv) => state.players[playerIndex].hand.length - mv.length === 0);
      if (winning) return winning;

      // Difficulty-based handling
      if (mode === 'easy') {
        const safe = pool.filter((move) => !usesTwo(move));
        if (safe.length > 0) pool = safe;
      } else if (mode === 'normal') {
        const safe = pool.filter((move) => !usesTwo(move));
        if (safe.length > 0) pool = safe;
      } else {
        // hard: try to conserve 2s and bombs unless necessary
        const nonTwo = pool.filter((mv) => !usesTwo(mv) && mv.type !== 'bomb');
        if (nonTwo.length > 0) pool = nonTwo;
      }

      // Prefer moves that reduce hand count the most, then by score
      pool.sort((a, b) => (state.players[playerIndex].hand.length - a.length) - (state.players[playerIndex].hand.length - b.length) || scoreMove(b, mode, isLead) - scoreMove(a, mode, isLead) || compareComboStrength(b, a));
      // Avoid leaving last card as 2 when possible
      const nonLeaving = pool.filter((mv) => !wouldLeaveLastTwo(playerIndex, mv));
      if (nonLeaving.length > 0) return nonLeaving[0];

      return pool[0];
    }

    function startFreshRound(winnerIndex) {
      state.lastPlay = null;
      state.roundPasses = new Array(state.playerCount).fill(false);
      state.players.forEach((player) => {
        player.passed = false;
      });
      state.currentPlayer = winnerIndex;
      log(`${state.players[winnerIndex].name}이(가) 새 라운드를 시작합니다.`);
      log('이전 라운드에서 제외된 플레이어도 모두 다시 참여합니다.');
      showFreshRoundBanner();
    }

    function showFreshRoundBanner(duration = 1600) {
      const elBanner = document.getElementById('freshRoundBanner');
      if (!elBanner) return;
      elBanner.classList.remove('hidden');
      setTimeout(() => {
        elBanner.classList.add('hidden');
      }, duration);
    }

    function checkAndStartFreshRound() {
      if (!state.lastPlay) return false;
      const leadIndex = state.lastPlay.player;

      // If only one active (not passed) player remains, start fresh round with them
      const remainingActive = state.players.filter((player) => player.hand.length > 0 && !player.passed);
      if (remainingActive.length === 1) {
        const onlyIndex = state.players.indexOf(remainingActive[0]);
        startFreshRound(onlyIndex);
        return true;
      }

      const activeOpponents = state.players.filter((player, index) => player.hand.length > 0 && index !== leadIndex);
      const allPassed = activeOpponents.every((player) => state.roundPasses[state.players.indexOf(player)]);
      if (allPassed) {
        startFreshRound(leadIndex);
        return true;
      }

      return false;
    }

    function nextActivePlayer(fromIndex) {
      for (let step = 1; step <= state.players.length; step += 1) {
        const index = (fromIndex + step) % state.players.length;
        if (state.players[index].hand.length > 0 && !state.players[index].passed) return index;
      }
      return -1;
    }

    function activeAIPlayers() {
      return state.players.filter((player) => !player.isHuman && player.hand.length > 0 && !player.passed).length;
    }

    function renderPlayers() {
      el.playersArea.innerHTML = '';
      state.players.forEach((player, index) => {
        const card = document.createElement('div');
        card.className = `player-card ${player.passed ? 'passed' : ''} ${state.currentPlayer === index && state.started && !state.gameOver && !player.passed ? 'active' : ''}`;
        const isHuman = player.isHuman;
        card.innerHTML = `
          <div class="player-top">
            <div class="player-name">${player.name}${isHuman ? ' (당신)' : ''}</div>
            <div class="player-badge">${player.passed ? '패스됨' : index === state.starterIndex && state.started ? '선공' : isHuman ? '플레이어' : 'AI'}</div>
          </div>
          <div class="cards-left">${player.hand.length}장</div>
          <div class="card-row">${renderBacks(Math.min(player.hand.length, 6))}</div>
        `;
        el.playersArea.appendChild(card);
      });
    }

    function renderBacks(count) {
      return Array.from({ length: count }, () => '<div class="card back small"></div>').join('');
    }

    function renderTable() {
      if (state.lastPlay) {
        el.tableCards.innerHTML = state.lastPlay.cards.map((card) => cardMarkup(card, true)).join('');
        el.roundInfo.textContent = `${state.lastPlay.playerName}의 ${state.lastPlay.type}`;
        el.lastPlayText.textContent = `${state.lastPlay.playerName}: ${state.lastPlay.cards.map(formatCard).join(' ')}`;
      } else {
        el.tableCards.innerHTML = '<div class="message">이번 라운드를 열 수 있습니다.</div>';
        el.roundInfo.textContent = '새 라운드';
        el.lastPlayText.textContent = '없음';
      }
    }

    function cardMarkup(card, small = false) {
      const classes = ['card', card.color, small ? 'small' : ''];
      return `
        <div class="${classes.join(' ')}">
          <div class="top"><span class="rank">${card.rank}</span><span class="suit">${card.symbol}</span></div>
          <div class="center">${card.symbol}</div>
          <div class="bottom"><span class="suit">${card.symbol}</span><span class="rank">${card.rank}</span></div>
        </div>
      `;
    }

    function renderHand() {
      const human = state.players[state.humanIndex];
      if (!human) {
        el.handCountText.textContent = '0장';
        el.handArea.innerHTML = '';
        return;
      }
      el.handCountText.textContent = `${human.hand.length}장`;
      el.handArea.innerHTML = '';

      const sorted = sortCards(human.hand);
      sorted.forEach((card) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = `card ${card.color} ${state.selected.has(card.id) ? 'selected' : ''}`;
        button.innerHTML = `
          <div class="top"><span class="rank">${card.rank}</span><span class="suit">${card.symbol}</span></div>
          <div class="center">${card.symbol}</div>
          <div class="bottom"><span class="suit">${card.symbol}</span><span class="rank">${card.rank}</span></div>
        `;
        button.addEventListener('click', () => {
          if (!state.started || state.gameOver) return;
          if (state.currentPlayer !== state.humanIndex) return;
          if (state.players[state.humanIndex].hand.length === 0) return;
          if (state.selected.has(card.id)) state.selected.delete(card.id);
          else state.selected.add(card.id);
          renderAll();
        });
        el.handArea.appendChild(button);
      });
    }

    function log(line) {
      const item = document.createElement('div');
      item.className = 'log-item';
      item.textContent = line;
      el.logArea.prepend(item);
    }

    function setMessage(text, kind = '') {
      el.messageArea.textContent = text;
      el.messageArea.className = `message ${kind}`.trim();
      el.gameText.textContent = text || '진행 중';
    }

    function clearAiTimer() {
      if (state.aiTimer) {
        clearTimeout(state.aiTimer);
        state.aiTimer = null;
      }
    }

    function applyPlay(playerIndex, cards, combo) {
      const player = state.players[playerIndex];
      const playedIds = new Set(cards.map((card) => card.id));
      player.hand = player.hand.filter((card) => !playedIds.has(card.id));
      player.hand = sortCards(player.hand);

      state.lastPlay = {
        ...combo,
        player: playerIndex,
        playerName: player.name,
      };
      state.roundPasses = new Array(state.playerCount).fill(false);
      state.roundPasses[playerIndex] = false;
      state.firstMove = false;
      state.selected.clear();

      log(`${player.name}이(가) ${combo.cards.map(formatCard).join(' ')}를 냈습니다.`);
      setMessage(`${player.name}의 턴이 끝났습니다.`, 'success');

      

      if (player.isHuman && player.hand.length === 0) {
        finishGame('승리', '손패를 모두 비웠습니다. 먼저 내려간 플레이어가 승리합니다.');
        return;
      }

      if (activeAIPlayers() === 0 && state.players[state.humanIndex].hand.length > 0) {
        finishGame('패배', 'AI가 모두 탈락했습니다. 당신은 아직 손패가 남아 있습니다.');
        return;
      }

      state.currentPlayer = nextActivePlayer(playerIndex);
      if (state.currentPlayer === -1) {
        finishGame('무승부', '더 이상 진행할 플레이어가 없습니다.');
        return;
      }

      renderAll();
      scheduleTurn();
    }

    function finishGame(title, text) {
      state.gameOver = true;
      clearAiTimer();
      el.gameOverTitle.textContent = `게임 ${title}`;
      el.gameOverText.textContent = text;
      el.gameOverLayer.classList.remove('hidden');
      setMessage(text, title === '승리' ? 'success' : 'error');
      renderAll();
    }

    function passTurn() {
      if (!state.started || state.gameOver) return;
      if (state.currentPlayer !== state.humanIndex) return;
      if (state.firstMove && state.currentPlayer === state.starterIndex) {
        setMessage('첫 라운드에서는 3♠를 포함한 카드만 낼 수 있습니다.', 'error');
        return;
      }

      state.roundPasses[state.currentPlayer] = true;
      state.players[state.currentPlayer].passed = true;
      log(`${state.players[state.currentPlayer].name}이(가) 패스했습니다.`);

      if (checkAndStartFreshRound()) {
        setMessage('모두 패스했습니다. 마지막으로 낸 플레이어가 새 라운드를 엽니다.', 'success');
        renderAll();
        scheduleTurn();
        return;
      }

      state.currentPlayer = nextActivePlayer(state.currentPlayer);
      renderAll();
      scheduleTurn();
    }

    function playSelectedCards() {
      if (!state.started || state.gameOver) return;
      if (state.currentPlayer !== state.humanIndex) return;

      const selectedCards = getSelectedCards();
      const combo = evaluateCombo(selectedCards);
      if (!combo) {
        setMessage('선택한 카드 조합이 족보가 아닙니다.', 'error');
        return;
      }

      if (!canBeat(combo, state.lastPlay, state.humanIndex)) {
        setMessage('현재 테이블의 카드보다 강하지 않거나 첫 턴 규칙을 만족하지 않습니다.', 'error');
        return;
      }

      // Prevent leaving the player with a single remaining card that is a 2
      if (wouldLeaveLastTwo(state.humanIndex, combo)) {
        setMessage('마지막 남은 카드가 2가 되도록 내는 것은 불가합니다. 먼저 2를 내세요.', 'error');
        return;
      }

      applyPlay(state.humanIndex, selectedCards, combo);
    }

    function scheduleTurn() {
      clearAiTimer();
      if (!state.started || state.gameOver) return;
      const current = state.players[state.currentPlayer];
      if (!current || current.hand.length === 0) {
        state.currentPlayer = nextActivePlayer(state.currentPlayer);
        renderAll();
        scheduleTurn();
        return;
      }

      if (current.isHuman) {
        setMessage(state.lastPlay ? '대응하거나 패스하세요.' : '새 라운드입니다. 원하는 족보를 내세요.');
        renderAll();
        return;
      }

      state.aiTimer = setTimeout(() => {
        if (!state.started || state.gameOver) return;
        const aiMove = chooseAiMove(state.currentPlayer);
        if (!aiMove) {
          state.roundPasses[state.currentPlayer] = true;
          state.players[state.currentPlayer].passed = true;
          log(`${current.name}이(가) 패스했습니다.`);

          if (checkAndStartFreshRound()) {
            renderAll();
            scheduleTurn();
            return;
          }

          state.currentPlayer = nextActivePlayer(state.currentPlayer);
          renderAll();
          scheduleTurn();
          return;
        }

        applyPlay(state.currentPlayer, aiMove.cards, aiMove);
      }, 650);
    }

    function renderControls() {
      const humanTurn = state.started && !state.gameOver && state.currentPlayer === state.humanIndex;
      el.playBtn.disabled = !humanTurn;
      el.passBtn.disabled = !humanTurn || (state.firstMove && state.currentPlayer === state.starterIndex);
      el.startBtn.disabled = state.started && !state.gameOver;
      el.playBtn.textContent = humanTurn ? '내기' : '대기 중';
      el.passBtn.textContent = state.firstMove && state.currentPlayer === state.starterIndex ? '첫 턴 불가' : '패스';
    }

    function renderAll() {
      renderPlayers();
      renderTable();
      renderHand();
      renderControls();

      if (!state.started) {
        el.turnText.textContent = '게임을 시작하세요';
        el.gameText.textContent = '플레이 수와 난이도를 선택한 뒤 시작합니다.';
        el.roundInfo.textContent = '대기 중';
        el.handCountText.textContent = '0장';
        el.tableCards.innerHTML = '<div class="message">카드를 섞으면 테이블이 열립니다.</div>';
      } else if (!state.gameOver) {
        const current = state.players[state.currentPlayer];
        el.turnText.textContent = `${current.name}의 턴`;
        el.gameText.textContent = state.lastPlay ? `${comboSummary(state.lastPlay)}에 대응하거나 패스하세요.` : '이번 라운드를 선공할 수 있습니다.';
      }
    }

    function startGame() {
      shuffleAndDeal();
      el.gameOverLayer.classList.add('hidden');
      el.logArea.innerHTML = '';
      const starter = state.players[state.starterIndex];
      log(`게임 시작. ${starter.name}이(가) 3♠를 보유해 선공합니다.`);
      setMessage(`${starter.name}이(가) 먼저 시작합니다.` , 'success');
      renderAll();
      scheduleTurn();
    }

    function updateSelectionButtons() {
      document.querySelectorAll('#playerCountButtons .choice').forEach((button) => {
        button.classList.toggle('active', Number(button.dataset.count) === state.playerCount);
      });

      document.querySelectorAll('#difficultyButtons .choice').forEach((button) => {
        button.classList.toggle('active', button.dataset.difficulty === state.difficulty);
      });
    }

    el.playerCountButtons.addEventListener('click', (event) => {
      const button = event.target.closest('button[data-count]');
      if (!button) return;
      state.playerCount = Number(button.dataset.count);
      updateSelectionButtons();
    });

    el.difficultyButtons.addEventListener('click', (event) => {
      const button = event.target.closest('button[data-difficulty]');
      if (!button) return;
      state.difficulty = button.dataset.difficulty;
      updateSelectionButtons();
    });

    el.startBtn.addEventListener('click', startGame);
    el.restartBtn.addEventListener('click', startGame);
    el.playBtn.addEventListener('click', playSelectedCards);
    el.passBtn.addEventListener('click', passTurn);

    updateSelectionButtons();
    renderAll();
    setMessage('게임 설정을 선택한 뒤 시작하세요.');
  </script>
</body>
</html>
<section class="page page-test-game" data-page="test-game">
	<header class="test-game-head">
		<div>
			<p class="test-game-kicker">TRAINING YARD / 001</p>
			<div class="test-game-title-row">
				<h1>Test Game</h1>
				<button class="test-game-settings-open" type="button" data-game-settings-open>설정</button>
			</div>
		</div>
		<div class="test-game-controls" aria-label="조작 방법">
			<span><kbd data-movement-hint="moveUp">W</kbd><kbd data-movement-hint="moveLeft">A</kbd><kbd data-movement-hint="moveDown">S</kbd><kbd data-movement-hint="moveRight">D</kbd> 이동</span>
			<span><kbd>LMB</kbd> 타겟팅 공격</span>
			<span><kbd data-skill-hint="powerShot">RMB</kbd> 파워 샷</span>
			<span><kbd data-skill-hint="tripleShot">MMB</kbd> 3연사</span>
			<span><kbd data-skill-hint="mouseDash">MB4</kbd> 마우스 회피</span>
			<span><kbd data-skill-hint="scatterShot">MB5</kbd> 산탄</span>
			<span><kbd data-skill-hint="dash">Left Shift</kbd> 대시</span>
			<span><kbd data-skill-hint="rapidFire">Caps Lock</kbd> 난사</span>
		</div>
	</header>
	<div class="test-game-hud" aria-label="전투 상태">
		<div class="test-game-stat test-game-round-stat">
			<span>ROUND</span>
			<strong data-game-round>01</strong>
		</div>
		<div class="test-game-stat test-game-health-stat">
			<div class="test-game-stat-label"><span>ARMOR</span><strong><span data-game-health-value>1</span><small> / 1</small></strong></div>
			<small class="test-game-armor-cooldown" data-game-armor-cooldown>READY</small>
			<div class="test-game-health-track"><span data-game-health></span></div>
		</div>
		<div class="test-game-stat">
			<span>LIVES</span>
			<strong data-game-lives aria-label="남은 목숨 3개">♥ ♥ ♥</strong>
		</div>
		<div class="test-game-stat">
			<span>HOSTILES</span>
			<strong data-game-enemies>0</strong>
		</div>
		<div class="test-game-stat test-game-score-stat">
			<span>SCORE</span>
			<strong data-game-score>00000</strong>
		</div>
	</div>
	<div class="test-game-stage">
		<canvas class="test-game-canvas" data-test-game tabindex="0" aria-label="W, A, S, D로 이동하고 마우스 좌클릭으로 총을 쏘는 게임"></canvas>
		<section class="test-game-overlay" data-game-overlay role="status" aria-live="polite" hidden>
			<div class="test-game-overlay-panel">
				<p class="test-game-kicker">COMBAT SECTOR / 01-10</p>
				<h2 data-game-overlay-title>ROUND 01</h2>
				<p data-game-overlay-text>적의 공격을 버티고 전장을 정리하세요</p>
				<button type="button" data-game-restart hidden>다시 시작</button>
			</div>
		</section>
	</div>
	<dialog class="test-game-settings" data-game-settings aria-labelledby="test-game-settings-title">
		<div class="test-game-settings-header">
			<div>
				<p class="test-game-kicker">CONTROL SETUP</p>
				<h2 id="test-game-settings-title">스킬 키 설정</h2>
			</div>
			<p>이동 또는 스킬을 선택하고 사용할 키를 누르세요. 스킬은 마우스 버튼도 지정할 수 있습니다.</p>
		</div>
		<div class="test-game-bindings" data-game-bindings></div>
		<p class="test-game-settings-message" data-game-settings-message aria-live="polite">이동 또는 스킬을 선택해 키를 지정하세요.</p>
		<footer class="test-game-settings-actions">
			<button type="button" data-game-settings-cancel>취소</button>
			<button type="button" data-game-settings-save>저장</button>
		</footer>
	</dialog>
</section>
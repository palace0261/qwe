<?php $basePath = $basePath ?? ''; ?>

<section class="page page-home" data-page="home">
	<section class="hero-banner">
		<div>
			<p class="hero-eyebrow">ERP/소다샵/도매몰/네이버/플로우</p>
			<h1>관리 통합(TEST)</h1>
			<p class="hero-copy">Ai_Automation</p>
			<div class="hero-actions">
				<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product" class="btn-primary">Ai_Automation</a>
				<a href="#" class="btn-ghost">회원가입하고 쿠폰받기</a>
			</div>
		</div>
		<div class="hero-spec">
			<strong>Ai_Automation</strong>
			<ul>
				<li>Ai_Automation</li>
				<li>Ai_Automation</li>
				<li>Ai_Automation</li>
			</ul>
		</div>
	</section>

	<section class="category-strip" aria-label="상품 카테고리">
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
		<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">Ai_Automation</a>
	</section>

	<section class="home-layout">
		<div class="home-products">
			<header class="section-head">
				<h2>Ai_Automation</h2>
				<a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product">전체 보기</a>
			</header>

			<div class="showcase-grid">
				<article class="showcase-card">
					<span class="tag">BEST</span>
					<h3>BeamOne X7 Pro 4K</h3>
					<p>고휘도 3200 ANSI · 자동 키스톤 · 넷플릭스 지원</p>
					<strong>1,290,000원</strong>
				</article>
				<article class="showcase-card">
					<span class="tag">NEW</span>
					<h3>CinemaFlow S2 Laser</h3>
					<p>레이저 광원 · 초단초점 · 저소음 24dB</p>
					<strong>1,590,000원</strong>
				</article>
				<article class="showcase-card">
					<span class="tag">HOT</span>
					<h3>MiniBeam Go Lite</h3>
					<p>캠핑 특화 · USB-C 전원 · 700g 초경량</p>
					<strong>429,000원</strong>
				</article>
				<article class="showcase-card">
					<span class="tag">SALE</span>
					<h3>GameCast 120Hz</h3>
					<p>저지연 8ms · 120Hz · 콘솔 최적화</p>
					<strong>879,000원</strong>
				</article>
			</div>
		</div>

		<aside class="home-side">
			<section class="auth-panel">
				<h2>로그인</h2>
				<p>회원 전용 특가와 주문 추적을 이용해보세요.</p>
				<form>
					<input type="email" placeholder="이메일">
					<input type="password" placeholder="비밀번호">
					<button type="button">로그인</button>
				</form>
				<a href="#" class="signup-link">회원가입</a>
			</section>

			<section class="quick-info">
				<h3>카테고리 TOP</h3>
				<ul>
					<li>4K UHD</li>
					<li>미니빔</li>
					<li>레이저</li>
					<li>스크린 세트</li>
				</ul>
			</section>
		</aside>
	</section>
</section>

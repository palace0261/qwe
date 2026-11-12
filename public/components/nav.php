<?php $currentPage = $page ?? 'home'; ?>
<?php $basePath = $basePath ?? ''; ?>

<!-- 

상품 관리와 사이트 관리 메뉴 만들기 

사이트관리

 - 네이버
 - 소다샵
 - 도매몰

상품 관리

 db에 올리기 

상품 등록/수정/업로드(api 등록 및 수정 관리)



-->
<nav class="nav">

    <a href="<?= htmlspecialchars($basePath) ?>/?page=home" data-page="home" class="nav-link <?= $currentPage === 'home' ? 'is-active' : '' ?>" <?= $currentPage === 'home' ? 'aria-current="page"' : '' ?>>
        메인
    </a>

    <a href="<?= htmlspecialchars($basePath) ?>/?page=product" data-page="product" class="nav-link <?= $currentPage === 'product' ? 'is-active' : '' ?>" <?= $currentPage === 'product' ? 'aria-current="page"' : '' ?>>
        프로젝트
    </a>

    <a href="<?= htmlspecialchars($basePath) ?>/?page=order" data-page="order" class="nav-link <?= $currentPage === 'order' ? 'is-active' : '' ?>" <?= $currentPage === 'order' ? 'aria-current="page"' : '' ?>>
        주문관리
    </a>

    <a href="<?= htmlspecialchars($basePath) ?>/?page=customer" data-page="customer" class="nav-link <?= $currentPage === 'customer' ? 'is-active' : '' ?>" <?= $currentPage === 'customer' ? 'aria-current="page"' : '' ?>>
        고객관리
    </a>

    <a href="<?= htmlspecialchars($basePath) ?>/?page=image-editor" data-page="image-editor" class="nav-link <?= $currentPage === 'image-editor' ? 'is-active' : '' ?>" <?= $currentPage === 'image-editor' ? 'aria-current="page"' : '' ?>>
        이미지 편집
    </a>

    <a href="<?= htmlspecialchars($basePath) ?>/?page=test-game" data-page="test-game" class="nav-link <?= $currentPage === 'test-game' ? 'is-active' : '' ?>" <?= $currentPage === 'test-game' ? 'aria-current="page"' : '' ?>>
        Test Game
    </a>

</nav>
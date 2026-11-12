<header class="header">

<!-- 

디자인 작업 내용
pc 너비 1440px 디스플레이 그리드 모바일 반응형 디자인으로 작업해야 함

api info

아웃바운드 IP
34.64.184.142 / 34.64.220.67 / 34.64.112.246 / seoul-4

mdb / mariadb@11.0
svc.sel4.cloudtype.app:31446

tablename: aam_testTable
id:palace0261
pw:palace0261@@


flow api: C:\xampp\htdocs\@home\Ai_Automation\file\test\db

erp api : C:\xampp\htdocs\@home\Ai_Automation\file\test\api\ec

하고자 하는 작업
1) 
 
-->

    <?php $basePath = $basePath ?? ''; ?>

    <a class="logo" href="<?= htmlspecialchars($basePath) ?>/?page=home" data-page="home">
        SODA 통합관리 솔루션
    </a>

    <form class="header-search" action="<?= htmlspecialchars($basePath) ?>/?page=product" method="get">
        <input type="hidden" name="page" value="product">
        <input type="search" name="q" placeholder="원하는 검색해보세요" aria-label="상품 검색">
        <button type="submit">검색</button>
    </form>

<!-- 일단 숨김 숨기는 이유는 메뉴 토글 기능이 아직 구현되지 않았기 때문입니다. 또한 pc에서 안보이고 모바일에서 보임 모바일에서 이걸 뭐로 보여줄지 아직 고민 중 
    <button type="button" class="menu-toggle" data-menu-toggle aria-expanded="false" aria-controls="sidebar">
        메뉴
    </button>

    -->

    <div class="auth-actions">
        <a href="#" class="auth-link">로그인</a>
        <a href="#" class="auth-link auth-link-signup">회원가입</a>
    </div>

</header>
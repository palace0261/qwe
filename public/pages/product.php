<?php
if (!isset($products) || !is_array($products)) {
    $products = [
        [
            'name' => 'canonptz.co.kr(local)',
            'price' => 0,
            'url' => '../site/canon/index.php',
            'image' => 'https://image.kr.canon/pds/product/1663057445099_V2WqnJ0vNV.jpg'
        ],
        [
            'name' => 'canonptz.co.kr(캐논 PTZ 카메라)',
            'price' => 39000,
            'url' => 'https://port-9000-testphp-ma6q5cjy22737d6f.sel4.cloudtype.app//site/canon/index.php?p=main',
            'image' => 'https://image.kr.canon/pds/product/1663057445099_V2WqnJ0vNV.jpg'
        ],
        [
            'name' => 'flow chat',
            'price' => 39000,
            'url' => '../site-s/main.html',
            'image' => 'https://image.kr.canon/pds/product/1663057445099_V2WqnJ0vNV.jpg'
        ],
        [
            'name' => '모던 머그 2P',
            'price' => 18000,
            'image' => 'https://images.unsplash.com/photo-1631984564919-1f6b2313a71c?q=80&w=1092&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
        [
            'name' => '데일리 티셔츠',
            'price' => 27000,
            'image' => 'https://images.unsplash.com/photo-1581235720704-06d3acfcb36f?q=80&w=1160&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
        ],
    ];
}
?>

<section class="page page-product" data-page="product">
    <header class="page-head">
        <h1>상품 관리</h1>
        <p>현재 판매 중인 상품을 확인하세요.</p>
    </header>

    <div class="product-list" id="product-style">
        <?php foreach ($products as $product): ?>

            <?php include __DIR__ . '/../components/product-card.php'; ?>

        <?php endforeach; ?>
    </div>
</section>
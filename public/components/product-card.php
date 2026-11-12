<?php $cardUrl = $product['url'] ?? null; ?>
<article class="product-card">
<?php if ($cardUrl): ?>
    <a href="<?= htmlspecialchars($cardUrl) ?>">
<?php endif; ?>

    <img
        src="<?= htmlspecialchars($product['image']) ?>"
        alt=""
    >

    <h3>
        <?= htmlspecialchars($product['name']) ?>
    </h3>

    <p>
        <?= number_format($product['price']) ?>원
    </p>

        <?php if ($cardUrl): ?>
            </a>
        <?php endif; ?>
</article>
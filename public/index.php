<?php

$page = $_GET['page'] ?? 'home';

$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$basePath = rtrim($scriptDir, '/');

if ($basePath === '.' || $basePath === '/') {
    $basePath = '';
}

$allowedPages = [
    'home',
    'product',
    'order',
    'customer',
    'image-editor',
    'stock-portfolio',
    'test-game'
];

if (!in_array($page, $allowedPages)) {
    $page = 'home';
}

$file = __DIR__ . "/pages/{$page}.php";

if (!is_file($file)) {
    $page = 'home';
    $file = __DIR__ . '/pages/home.php';
}


// AJAX로 main만 요청한 경우
if (isset($_GET['partial'])) {

    include $file;

    exit;
}

?>

<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>SODA MEDIA</title>

        <link rel="stylesheet"
            href="<?= htmlspecialchars($basePath) ?>/assets/css/style.css">
        <link rel="stylesheet"
            href="<?= htmlspecialchars($basePath) ?>/assets/css/test-game.css">

</head>

<body>

<?php include __DIR__ . '/components/header.php'; ?>

<?php include __DIR__ . '/components/nav.php'; ?>

<main id="app" data-current-page="<?= htmlspecialchars($page) ?>" data-base-path="<?= htmlspecialchars($basePath) ?>">

    <?php include $file; ?>

</main>

<?php include __DIR__ . '/components/footer.php'; ?>

<script type="module" src="<?= htmlspecialchars($basePath) ?>/assets/js/app.js"></script>

</body>

</html>
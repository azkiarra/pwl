<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Inventory') ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

        <?= $this->include('layout/header') ?>

    <div class="wrapper">

        <button class="toggle-btn">☰</button>

        <?= $this->include('layout/sidebar') ?>

        <main class="content">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <?= $this->include('layout/footer') ?>

    <script src="/js/sidebar_toggle.js"></script>

</body>
</html>

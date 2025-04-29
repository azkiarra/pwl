<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Inventory' ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="header" style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 36px; color: #ffff;">Selamat datang, <?= session()->get('username') ?> ! </h2>
    </header>
 
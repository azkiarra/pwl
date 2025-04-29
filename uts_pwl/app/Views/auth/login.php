<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inventory Barang</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="login-page">
    <div class="login-form">
        <h2>Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <form action="/login" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

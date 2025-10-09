<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/style.css">
</head>
<body>
    <div class="header">
        <div class="nav-left">
            <p class="logo">SUBJEK</p>
            <a href="<?= BASEURL; ?>">Home</a>
            <a href="<?= BASEURL; ?>/katalog">Katalog</a>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <a href="<?= BASEURL; ?>/admin">Admin Panel</a>
            <?php endif; ?>
        </div>

        <div class="nav-right">
            <?php if(isset($_SESSION['username'])): ?>
            <button class="user-btn" id="user-btn"><?= $_SESSION['username']; ?></button>
            <div class='user-dropdown' id="user-dropdown">
                <a href="<?= BASEURL; ?>/auth/logout">Logout</a>
            </div>
            <?php else: ?>
            <a href="<?= BASEURL; ?>/auth" class="link-login">Login</a>
            <?php endif; ?>

            <button class="hamburger" id="hamburger-btn">&#9776;</button>
            <div class="hamburger-menu" id="hamburger-menu">
                <a href="<?= BASEURL; ?>">Home</a>
                <a href="<?= BASEURL; ?>/katalog">Katalog</a>
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <a href="<?= BASEURL; ?>/admin">Admin Panel</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['username'])) : ?>
                    <a href="<?= BASEURL ?>/auth/logout">Logout</a>
                <?php else: ?>
                    <a href="<?= BASEURL; ?>/auth">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="my-container">
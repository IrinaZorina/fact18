<?php
// получаем файл стилей
$style = getTimeStyle();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Страница для курса по 1C-Битрикс">
    <title>Александр Торопов</title>
    <link rel="stylesheet" href="<?=$style;?>">
    <link rel="stylesheet" href="assets/css/mendeleev.css">
    <?php if (isset($bg_color)): ?>
    <style>
        body {
            background-color: <?=$bg_color?>;
        }
    </style>
    <?php endif; ?>
</head>
<body>
<header class="wrapper main_header border">
    <a href="index.php">
        <img src="assets/images/logo.svg" alt="Логотип Факт.Академия">
    </a>
    <nav>
        <a class="nav_item" href="/index.php?page=mendeleev">Менделеев</a>
        <a class="nav_item" href="/index.php?page=loop">Циклы</a>
        <a class="nav_item" href="/index.php?page=array">Массивы</a>
        <a class="nav_item" href="/index.php?page=string">Строки</a>
        <a class="nav_item" href="/index.php?page=functions">Функции</a>
        <?php
        if (isset($_SESSION['login'])):
        ?>
            <span>(<a href="profile.php" title="Страница профиля"><?=$_SESSION['login'];?></a>)</span>
            <a class="nav_item" href="logout.php">Выйти</a>
        <?php else: ?>
            <a class="nav_item" href="?page=login">Войти</a>
        <?php endif; ?>
    </nav>
</header>
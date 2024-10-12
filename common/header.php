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
</head>
<body>
<header class="wrapper main_header border">
    <a href="index.php">
        <img src="assets/images/logo.svg" alt="Логотип Факт.Академия">
    </a>
    <nav>
        <a class="nav_item" href="?page=mendeleev">Менделеев</a>
        <a class="nav_item" href="?page=loop">Циклы</a>
        <a class="nav_item" href="?page=array">Массивы</a>
        <a class="nav_item" href="?page=string">Строки</a>
        <a class="nav_item" href="?page=functions">Функции</a>
    </nav>
</header>
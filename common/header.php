<?php
$hour = date('H');

$style = 'assets/css/style_night.css';

if ($hour > 8 && $hour < 22) {
    $style = 'assets/css/style.css';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Страница для курса по 1C-Битрикс">
    <title>Александр Торопов</title>
    <link rel="stylesheet" href="<?=$style;?>">
</head>
<body>
<header class="wrapper main_header border">
    <a href="index.html">
        <img src="assets/images/logo.svg" alt="Логотип Факт.Академия">
    </a>
    <nav>
        <a class="nav_item" href="mendeleev.php">Менделеев</a>
        <a class="nav_item" href="loop.php">Циклы</a>
    </nav>
</header>
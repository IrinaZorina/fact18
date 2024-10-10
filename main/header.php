<?php
$currentHour = (int) date('H');
$isDayTime = true;

if ($currentHour < 8 || $currentHour > 20) {
    $isDayTime = false;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1 занятие Верстка</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/picture.css">

</head>
<body class="<?=$isDayTime ? 'light-theme' : 'dark-theme'?>">


<header >
    <div class="transition">
        <div class="transition1"><a href="Mendeleev.html" target="_blank" title="переход на страницу ячейки таблицы Менделеева">Ячейка водорода</a></div>
        <div class="transition1"><a href="cirkle.php" target="_blank" title="Переход на циклы"> Циклы </a> </div>
        <div class="transition1"><a href="dz_array.php" target="_blank" title="Переход на массивы"> Массивы </a> </div>
        <div class="transition1"><a href="string.php" target="_blank" title="Переход на массивы"> Функции и строки </a> </div>

    </div>

    <div class="create-line"></div>

</header>
<p></p>
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


<header>
    <nav>
       <ul class="transition">
           <li class="transition1">
               <a href="../main/Mendeleev.html" title="переход на страницу ячейки таблицы Менделеева">Ячейка водорода</a>
           </li>
        <li class="transition1">
            <a href="cirkle.php" title="Переход на циклы">Циклы</a>
        </li>
        <li class="transition1">
            <a href="dz_array.php"  title="Переход на массивы"> Массивы </a>
        </li>
        <li class="transition1">
            <a href="../main/string.php" title="Переход на страницу со строками"> Строки </a>
        </li>
           <li class="transition1">
               <a href="../main/function.php" title="Переход на страницу с функциями"> Функции </a>
           </li>
       </ul>
    </nav>

    <div class="create-line"></div>

</header>
<p></p>
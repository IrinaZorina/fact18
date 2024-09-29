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
    </div>

    <div class="create-line"></div>

</header>
<p></p>
<main>
    <div class="myName">
        Максим Лугвин
    </div>
<aside class="fotoBox">

</aside>



<section class="textBox">
    <div class="textBox1">
    Мне 30 лет, живу в городе Ростов-на-Дону. Образование среднее специальное, в данный момент работаю инженером 2 линии поддержки.<br>
    Люблю играть в настольные игры и кататься на сноуборде.
    </div>
    <div class="textBox2">
        1-й день курса понравился, преподаватель интересно и доступно объясняет материал. Уверен, что изучу много нового и реализую свою мечту.
    </div>

</section>

    <div class="blockName"> Фото г. Ростова-на-Дону </div>

    <div class="block1">
        <div class="picture1"></div>
        <div class="picture2"></div>
        <div class="picture3"></div>
        <div class="picture4"></div>
        <div class="pictureName"> Набережная </div>
        <div class="pictureName"> Музыкальный театр </div>
        <div class="pictureName"> Стелла </div>
        <div class="pictureName"> Памятник Тачанка </div>
    </div>

    <div class="blockName"> Еще чуть фото города  </div>

    <div class="block2">
        <div class="picture5"></div>
        <div class="pictureName5"> Кумженская роща </div>
        <div class="picture6"></div>
        <div class="pictureName6"> Парамоновские склады </div>
        <div class="picture7"></div>
        <div class="pictureName7"> Театральная площадь </div>
        <div class="picture8"></div>
        <div class="pictureName8"> Мозаика в подземных переходах </div>

    </div>


</main>





</body>
</html>
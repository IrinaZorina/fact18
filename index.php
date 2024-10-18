<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ia=edge">
    <meta name="keywords" content="php, html, css, bitrix">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
    $time = date("G");
    if($time < 21 and $time > 8){
        $backColor = 'day';
    }
    else{
        $backColor = 'night';
    }
    ?>
</head>
<body class="<?php echo $backColor; ?>">
<section class="link">
    <a href="tableM.html">Элемент из таблицы Менделеева</a>
    <a href="header.php">ffffffffffffffffffff</a>
</section>
<section class="blockOne">
    <section class="one">
        <div class="one"> Немного обо мне</div>
    </section>
    <section class="two">
        <div class="two"> <img src="assets/image/photo.jpg" width="384" , height="512" alt=""></div>
    </section>
    <section class="three">
        <div class="three">Ситников Кирилл</div>
    </section>
    <section class="four">
        <div class="four"><p>Мне понравился подход онлайн уроков с возможностью задавать вопросы и то что рассказывают на простом и понятном языке.</p></div>
    </section>
    <section class="five">
        <div class="five"><p>Привет! </p></div>
    </section>
</section>
<section class="blockTwo">
    <section class="firstHeader">
        <div class="firstTitle"> Парки Краснодара</div>
    </section>
    <section class="firstBlock">
        <div class="firstPicture"><img src="assets/image/ParkG.jpg" width="150"  height="150" alt=""></div>
        <div class="firstDescription">Парк Галицкого</div>
    </section>
    <section class="secondBlock">
        <div class="secondPicture"><img src="assets/image/botG.jpg" width="150" height="150" alt=""></div>
        <div class="secondDescription">Ботанический сад</div>
    </section>
    <section class="thirdBlock">
        <div class="thirdPicture"><img src="assets/image/parkSI.jpg" width="150" height="150" alt=""></div>
        <div class="thirdDescription">Парк "Солнечный остров"</div>
    </section>
    <section class="fourthBlock">
        <div class="fourthPicture"><img src="assets/image/chG.jpg" width="150" height="150" alt=""></div>
        <div class="fourthDescription">Чистяковская роща</div>
    </section>
</section>
<section class="blockThree">
    <section class="secondHeader">
        <div class="secondTitle">Достопримечательности Краснодарского края</div>
    </section>
    <section class="fifthBlock">
        <div class="fifthPicture"><img src="assets/image/Rock.webp" width="350" height="350" alt=""></div>
        <div class="fifthDescription">Скала Киселёва</div>
    </section>
    <section class="sixthBlock">
        <div class="sixthPicture"><img src="assets/image/Dant.webp" width="350" height="350" alt=""></div>
        <div class="sixthDescription">Дантово ущелье</div>
    </section>
    <section class="seventhBlock">
        <div class="seventhPicture"><img src="assets/image/Guam.webp" width="350" height="350" alt=""></div>
        <div class="seventhDescription">Гуамское ущелье</div>
    </section>
    <section class="eighthBlock">
        <div class="eighthPicture"><img src="assets/image/waterfall.webp" width="350" height="350" alt=""></div>
        <div class="eighthDescription">33 водопада</div>
    </section>
</section>












<!--
<body>
<div class="one">
    <h1>Немного обо мне</h1>
</div>
<div class="two">
    <img src="assets/image/photo.jpg" width="192" , height="256" alt="">
</div>
<div class="three">
    <h1>Ситников Кирилл</h1>
</div>
<div class="four">
    <p><big>Мне понравился подход онлайн уроков с возможностью задавать вопросы и то что рассказывают на простом и понятном языке.</big></p>
</div>
<div class="five">
    <p><big>Привет! </big></p>
</div>
-->











</body>
</html>
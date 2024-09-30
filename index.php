<?php
$time = date('G');
if ($time > 20 || $time < 8) {
    $font = 'white';
    $background_color = 'gray';
    $font_nav = 'white';
    $background_color_nav = 'black';
} else {
    $font = 'black';
    $background_color = 'white';
    $font_nav = 'orange';
    $background_color_nav = 'gray';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style_about.css">
    <title>Сайт Вареникова</title>
    <nav class="background" style="padding: 10px 30px; background-color: <? echo $background_color_nav?>"><a href="table.html" target="_blank"  style="color:<? echo $font_nav ?>"><b>таблица Менделеева</b></a></nav>

</head>
<body style="color: <? echo $font ?>; background-color: <? echo $background_color ?>">
<div class="conteiner">
    <div class="img_ava"><img src="assets/imag/ava.jpg" alt="фото" class="img_ava"></div>
    <div class="title"><h1>Татьяна Вареникова</h1></div>
    <div class="style_info dark_style"> Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные
        тексты. Вдали
        от всех живут они в буквенных домах на берегу Семантика большого языкового океана. Маленький ручеек Даль журчит
        по всей стране и обеспечивает ее всеми необходимыми правилами. Эта парадигматическая страна, в которой жаренные
        члены предложения залетают прямо в рот. Даже всемогущая пунктуация не имеет власти над рыбными текстами,
        ведущими безорфографичный образ жизни. Однажды одна маленькая строчка рыбного текста по имени Lorem ipsum решила
        выйти в большой мир грамматики. Великий Оксмокс предупреждал ее о злых запятых, диких знаках вопроса и коварных
        точках с запятой, но текст не дал сбить
    </div>
    <div class="style_info">Не следует, однако забывать, что укрепление и развитие структуры способствует подготовки и
        реализации системы обучения кадров, соответствует насущным потребностям. Равным образом реализация намеченных
        плановых заданий представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении
        поставленных задач.
        Разнообразный и богатый опыт рамки и место обучения кадров позволяет оценить значение соответствующий условий
        активизации. Таким образом постоянный количественный рост и сфера нашей активности влечет за собой процесс
        внедрения и модернизации форм развития.
    </div>
</div>
<div style="text-align: center"><h2>Достопримечательности Краснодара</h2></div>
<div class="conteiner2">
    <div>
        <div class="child1"></div>
        <div><h3>Царские ворота</h3></div>
    </div>
    <div>
        <div class="child2"></div>
        <div><h3>Парк "Краснодар"</h3></div>
    </div>
    <div>
        <div class="child3"></div>
        <div><h3>Поющие фонтаны</h3></div>
    </div>
    <div>
        <div class="child4"></div>
        <div><h3>Музей Фелицына</h3></div>
    </div>
</div>
<div style="text-align: center"><h2>Достопримечательности Краснодарского края</h2></div>
<div class="conteiner3">
    <div>
        <div class="krai1"></div>
        <div><h3>Сочи парк</h3></div>
    </div>
    <div>
        <div class="krai2"></div>
        <div><h3>Сочинский национальный парк"</h3></div>
    </div>
    <div>
        <div class="krai3"></div>
        <div><h3>Дольмены</h3></div>
    </div>
    <div>
        <div class="krai4"></div>
        <div><h3>Скала парус</h3></div>
    </div>
</div>
</body>


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
            <a href="mendeleev.php">Таблица Менделеева</a>
        </nav>
    </header>
    <section class="wrapper main_block border">
        <aside>
            <img class="my_photo" src="assets/images/my_photo.jpg" alt="Моя Фотография">
        </aside>
        <main>
            <h1 class="name">Александр Торопов</h1>
            <div class="content">
                <div class="content_item">
                    <p>Пишу разный <a href="https://github.com/aletoropov" target="_blank" title="Мой GitHub">код</a> на PHP и JavaScript, использую Linux Mint, делаю буклеты в Abode InDesign.</p>
                    <p>Люблю уехать в закат на велосипеде &#128690;</p>
                    <p>Люблю создавать цифровые продукты, которые приносят пользу людям &#128187;</p>
                    <p>Могу управлять скоростным поездом &#128646;</p>
                </div>
                <div class="content_item">
                    <p>Все понравилось, думаю это будет увлекательное приключение в мир кодинга и 1C Bitrix.</p>
                    <p>Надеюсь успешно справиться со всеми испытаниями и стать сертифицированным 1C Bitrix разработчиком.</p>
                </div>
            </div>
        </main>
    </section>
    <section class="wrapper main_block border">
        <h2 class="section_header">Достопримечательности Красноярского края</h2>
        <ul class="attractions_small">
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attractions1.jpg" alt="Бобровый лог">
                <h3>Бобровый лог</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attr_small1.jpg" alt="Пещера Большая Орешная">
                <h3>Пещера Большая Орешная</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attr_small2.jpg" alt="Национальный парк Столбы">
                <h3>Национальный парк "Столбы"</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attr_small3.jpg" alt="ГЭС">
                <h3>ГЭС</h3>
            </li>
        </ul>
    </section>
    <section class="wrapper main_block border">
        <h2 class="section_header">Достопримечательности города Красноярска</h2>
        <ul class="attractions_big">
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attractions1.jpg" alt="Красивый мост">
                <h3>Часовня</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attractions2.jpg" alt="Дои и река">
                <h3>Река</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attractions2.jpg" alt="Дои и река">
                <h3>Дома</h3>
            </li>
            <li class="attractions_item">
                <img class="attractions_image" src="assets/images/attractions1.jpg" alt="Красивый мост">
                <h3>Набережная</h3>
            </li>
        </ul>
    </section>
    <footer class="wrapper main_footer border">
       2024 &copy; Сделано с <span class="heart">&#10084;</span> для <a href="https://academy.fact.digital/" target="_blank">Факт.Академия</a>
    </footer>
</body>
</html>
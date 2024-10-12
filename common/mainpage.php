<?php
$about = require_once __DIR__ . '/about_text.php';
$testimonial = require_once __DIR__ . '/testimonial_text.php';

$color1 = '#008080';
$color2 = '#4682B4';

$testimonialText = colorEvenWords($testimonial, $color1, $color2);

$aboutText = colorFirstSentence($about, '#808000');

$date1 = '26-12-1988';
$date2 = date('d-m-Y');
?>
<section class="wrapper main_block border">
    <aside>
        <img class="my_photo" src="assets/images/my_photo.jpg" alt="Моя Фотография">
    </aside>
    <main>
        <h1 class="name">Александр Торопов</h1>
        <h2 class="name"><?php echo countDaysBetweenDates($date1, $date2);?> дня дарю людям радость</h2>
        <div class="content">
            <div class="content_item">
                <?=$aboutText?>
            </div>
            <div class="content_item">
                <?=$testimonialText?>
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
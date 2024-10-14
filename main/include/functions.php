<?php

function getDatesDiff($date)
{
    $currentUnixDate = time();
    $unixDate = strtotime($date);
    return floor(abs($unixDate - $currentUnixDate) / 60 / 60 / 24);
}

function getMainPageWordsCount(): int
{
    $headContent = file_get_contents(__DIR__ . '/../header.php');
    $mainContent = file_get_contents(__DIR__ . '/../main.php');
    $footerContent = file_get_contents(__DIR__ . '/../footer.php');
    $content = strip_tags($headContent) . strip_tags($mainContent) . strip_tags($footerContent) . strip_tags(getAboutMeText() . getAboutCourseText());
    return str_word_count($content, 0,'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
}

function getAboutMeText()
{
    $aboutMeText = 'Мне 30 лет, живу в городе Ростов-на-Дону. Образование среднее специальное, в данный момент работаю инженером 2 линии поддержки.<br> Люблю играть в настольные игры и кататься на сноуборде.';
    $aboutMeArray = explode('. ', $aboutMeText);
    $aboutMeArray[0] = "<span style='color: red'>$aboutMeArray[0]</span>";
    return implode('. ', $aboutMeArray);
}

function getAboutCourseText()
{
    $aboutCourseText = '1-й день курса понравился, преподаватель интересно и доступно объясняет материал. Уверен, что изучу много нового и реализую свою мечту.';
    $aboutCourseArray = explode(' ' , $aboutCourseText);
    for ($i = 0; $i < count($aboutCourseArray); $i++) {
        if (($i + 1) % 2 == 0) {
            $aboutCourseArray[$i] = "<span style='color: darkgoldenrod'>$aboutCourseArray[$i]</span>";
        } else {
            $aboutCourseArray[$i] = "<span style='color: darkgreen'>$aboutCourseArray[$i]</span>";
        }
    }
    return implode(' ', $aboutCourseArray);
}

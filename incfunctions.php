<?php
function getDatesDiff($date){
    $currentUnixDate = time();
    $unixDate = strtotime($date);
    return floor(abs($unixDate - $currentUnixDate) / 60 / 60 / 24);
}
function getMainPageWordsCount(): int{
    $headContent = file_get_contents(__DIR__ . 'header.php');
    $mainContent = file_get_contents(__DIR__ . 'index.php');
    $footerContent = file_get_contents(__DIR__ . 'footer.php');
    $content = strip_tags($headContent) . strip_tags($mainContent) . strip_tags($footerContent) . strip_tags(getAboutMeText() . getAboutCourseText());
    return str_word_count($content, 0,'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
}

function getAboutMeText(){
    $aboutMeText = 'Привет!';
    $aboutMeArray = explode('. ', $aboutMeText);
    $aboutMeArray[0] = "<span style='color: red'>$aboutMeArray[0]</span>";
    return implode('. ', $aboutMeArray);
}

function getAboutCourseText(){
    $aboutCourseText = 'Мне понравился подход онлайн уроков с возможностью задавать вопросы и то что рассказывают на простом и понятном языке.';
    $aboutCourseArray = explode(' ', $aboutCourseText);
    for ($i = 0; $i < count($aboutCourseArray); $i++) {
        if (($i + 1) % 2 == 0) {
            $aboutCourseArray[$i] = "<span style='color: darkgoldenrod'>$aboutCourseArray[$i]</span>";
        } else {
            $aboutCourseArray[$i] = "<span style='color: darkgreen'>$aboutCourseArray[$i]</span>";
        }
    }
    return implode(' ', $aboutCourseArray);
}
?>
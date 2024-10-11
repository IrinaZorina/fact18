<?php
/**
 * Функция расчета дней между датами
 */
function countDaysBetweenDates($date1, $date2) {
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
    if ($timestamp1 === false || $timestamp2 === false) {
        return "Ошибка: одна или обе даты указаны в неверном формате.";
    }
    $secondsDifference = abs($timestamp1 - $timestamp2);
    $daysDifference = floor($secondsDifference / (60 * 60 * 24));

    return $daysDifference;
}

/**
 * Функция для окрашивания первого предложения
 */
function colorFirstSentence($text, $color = '#808000') {
    $text = strip_tags($text);
    if (preg_match('/^(.*?[.!?])/', $text, $matches)) {
        $firstSentence = '<p><span style="color:' . htmlspecialchars($color) . ';">' . $matches[0] . '</span></p>';
        return str_replace($matches[0], $firstSentence, $text);
    }
    return $text;
}

/**
 * Функция окрашивая слов в тексте
 */
function colorEvenWords($text, $color1 = '#008080', $color2 = '#4682B4')
{
    $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    $colorText = '';

    foreach ($words as $index => $word) {
        $color = ($index % 2 == 0) ? $color1 : $color2;
        $colorText.= '<span style="color: ' . $color . ';">' . $word . '</span> ';
    }

    return $colorText;
}

/**
 * Функция подсчета гласных
 */
function countVowels($content) {
    $vowelsPattern = '/[аеёиоуыэюяАЕЁИОУЫЭЮЯ]/u';
    preg_match_all($vowelsPattern, $content, $matches);
    
    return count($matches[0]);
}

/**
 * Функция подсчета количества слов в тексте 
 */
function countWords($content)
{
    $words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}

/**
 * Сравниваем два числа и возвращаем наибольшее
 */
function maxNumber($num1 ,$num2)
{
    if ($num1 > $num2) {
        return $num1;
    }
    return  $num2;
}

/**
 * Получаем значение гипотенузы
 */
function getHypotenuse($num1, $num2) {
    return sqrt(pow($num1, 2) + pow($num2, 2));
}

/**
 * Функция, которая увеличивает число 10 до 1 000 000
 */
function multiNum($num = 10) {
    while ($num <= 1000000) {
        echo $num . PHP_EOL;
        $num *= 10;
    }
}
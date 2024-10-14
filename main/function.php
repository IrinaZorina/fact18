<?php
// слайд 14 1 задание
function sr ($a = 14 , $b = 5) {
    if ($a > $b) {
        $max = $a;
        return $a;
    } else  {
        $max = $b;
        return $b;

    }
}

echo sr();

echo "<br>";
echo "<br>";
//слайд 15 задание 2
function kat ($kat1 = 5 , $kat2 = 5) {
    $g = pow($kat1, 2) + pow($kat2, 2);
    return $g;
}
echo kat();

echo "<br>";
echo "<br>";
// слайд 15 задание 3
function name($a = 10) {
    for ($a = 10; $a <= 1100000; $a *= 10) {
        echo $a . "<br>";
    }

    if ($a > 1000000) {
        echo "достигнут предел" . "<br>";
    }

}
echo name();



// слайд 16 задание 4
function raa($a = 10, $min = 1, $max = 100) {
    $randomArr = [];
    for ($i = 0; $i < $a; $i++) {
        $randomArr[$i] = mt_rand($min, $max);
        echo "<br>";

    }
    return $randomArr;
}
print_r (raa());

// Слайд 1
//Слайд 16 задание 5
function getArrayArithmeticMean(array $array) {
    return array_sum($array) / count($array);
}
$array = range(1, mt_rand(2, 20));

echo '<pre>';
print_r($array);
echo getArrayArithmeticMean($array);
echo "<br>";

// слайд 17 2 задание
function getWordsCount(string $str): int
{
    $arr = preg_split('/[\s,.!;:]+/' , $str);
    return count(array_filter($arr));
}
$text = 'Very, long string!.';
echo getWordsCount($text);

function getWordsCount2(string $str): int
{

    $arr =  explode(',', $str);
    return count($arr);
}

$text2 = 'Hello, World!';
echo "<br>";
echo getWordsCount2($text2);
echo "<br>";
echo "<br>";
echo "<br>";
// 17 слайд задание 5
function conclusionNewStr($str = '')
{
    $arr = str_split($str);
    foreach ($arr as $value) {
        echo $value . PHP_EOL;
    }
}
$text3 = 'HTML, CSS, PHP, BITRIX';
conclusionNewStr($text3);
echo PHP_EOL;
function getDatesDiff($date)
{
    $currentUnixDate = time();
    $unixDate = strtotime($date);
    return floor(abs($unixDate - $currentUnixDate) / 60 / 60 / 24);
}
echo getDatesDiff('19.06.1994');
echo "<br>";

// слайд 17 задание 3
function getReversStr($str = 'HTML, CSS, PHP, BITRIX'){
    $outStr = strrev($str);
    return $outStr;
}
echo getReversStr();
echo '<br>';

// слайд 17 4 задание
function getLenghtStr($str = 'HTML, CSS, PHP, BITRIX'): int
{
    $result = mb_strlen($str);
    return $result;
}
echo getLenghtStr() . PHP_EOL;




<?php

$str3 = "HELLO";

$arr = str_split($str3, 3);

print_r($arr);
echo "<br>";


var_dump (str_replace(array("HEL", "LO"),array("HE", "LLO"), $arr));
echo "<br>";
$str4 = "fact" ;
echo "fact ";
echo (str_replace("fact", "Fact", $str4));
echo '<br>';
$fio = "Закирова Регина Артуровна";
$res = mb_substr($fio, 0, 15);
echo '<br>';
echo $res;
echo '<br>';
echo (str_replace("Закирова Регина", "Регина Закирова", $res));
echo '<br>';
echo '<br>';

$str5 = "Привет, мииир";
$st = mb_strtolower($str5);
$arr2 = mb_str_split($str5, 1);
$var = 0;
foreach ($arr2 as $k => $v) {
    if ($v == "и") {
        $var++;
    }
}
echo $var;
echo '<br>';
echo '<br>';

$str6 = "html css php";
$htm = mb_substr($str6, 0 , 4);
$cs = mb_substr($str6, 5 , 4);
$ph = mb_substr($str6, -4 , 4);
echo $htm;
echo '<br>';
echo $cs;
echo '<br>';
echo $ph;
echo '<br>';



$str6 = "qw.png";
if (str_contains($str6, '.png')) {
    echo "да";
} else {
    echo "нет";
}

// slide 23

$str7 = "длинная строка";
$res1 = "";
$tochki = "...";
$strLen = mb_strlen($str7);
if ($strLen > 5) {
    echo "<br>";
    $res1 = mb_substr($str7, 6, 255);
    echo "<br>";
    echo $res1 . $tochki;
} else {
    $res1 = $str7;
    echo "<br>";
    echo $res1;
}

echo "<br>";
echo "<br>";

$str8 = "abc abc abc";
$arr3 = mb_str_split($str8, 1);
$rep = array("1" , "2", "3");
$ser = array("a" , "b", "c");
echo str_replace($ser, $rep, $str8);


echo '<br>';
echo '<br>';


$str9 = "abc abc abc";
$b = "b";
$arr3 = mb_str_split($str9, 1);
$pos = strripos($str9, $b);
echo "position № $pos";


//$var = 0;
//foreach ($arr3 as $k => $v) {
//    if ($v == "b") {
//        $var++;
//    }
//}
//echo $var;

echo '<br>';
echo '<br>';
$str10 = "html , css , php";
var_dump(explode(' , ', $str10));

echo '<br>';
echo '<br>';
echo '<br>';

$dayNow = strtotime('10.10.2024');
$birthDay = strtotime('19.06.1994');
$res4 = 0;
$days = 0;
echo '<br>';
echo '<br>';

$res4 = abs($dayNow - $birthDay) / 60 /60 /24;

echo $res4;










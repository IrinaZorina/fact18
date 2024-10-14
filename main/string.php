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

$str7 = "qwerty";









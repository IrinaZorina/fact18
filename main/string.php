<?php
include_once 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="homeWork">
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
?>
</div>
<div class="homeWork">
<?php
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
?>
</div>
<div class="homeWork">
    <?php
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
?>
</div>
<div class="homeWork">
<?php
$str6 = "qw.png";
if (str_contains($str6, '.png')) {
    echo "да";
} else {
    echo "нет";
}
?>
</div>
<div class="homeWork">
    <?php
// slide 23 1 задание

$str8 = " очень длинная длинная строка";
$result = "";
$tochki = "...";
$lenght = mb_strlen($str8);
if ($lenght > 5) {
    $result = mb_substr($str8, 6, 255);
    echo '<br>';
    echo $result . $tochki;
    echo '<br>';
} else {
    $result = $str8;
    echo "вывод строки $result";
}

echo '<br>';
echo '<br>';
?>
</div>
<div class="homeWork">
    <?php
// задание 2

$str9 = "hello array , comment brain";
$str9 = str_replace ('a', '1', $str9);
$str9 = str_replace ('b', '2', $str9);
$str9 = str_replace ('c', '3', $str9);
echo $str9;
echo "<br>";
?>
</div>
<div class="homeWork">
    <?php
// задание 3 
echo "<br>";
$str11 = 'abc abc abc';
$lastB = strrpos($str11, "b");
echo "Место последней буквы 'b' - {$lastB}";

echo "<br>";
?>
</div>
<div class="homeWork">
    <?php
// задание 4

$str10 = "html css php";
$array1 = explode(" ", $str10);
print_r ($array1);
?>
</div>


</body>
</html>








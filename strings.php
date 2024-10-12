<?php
$str = "hello";
$arr = [substr($str, 0, 2), substr($str, 2)];
print_r($arr); 
echo "<br><br>";

$str2 = "fact";
echo strtoupper(substr($str2, 0, 1));
echo substr($str2, 1);
echo "<br><br>";

$str3 = "Закирова Регина Артуровна";
echo mb_substr($str3, start: 9, length:7);
echo mb_substr($str3, start: 0, length:8);
echo "<br><br>";

$str4 = "Привет, мир";
$s = "и";
$count = mb_substr_count($str4, $s);
echo  $count; 
echo "<br><br>";

$str5 = "html css php";
echo mb_substr($str5, start: 0, length: 4);
echo "<br>";
echo mb_substr($str5, start: 5, length: 3);
echo "<br>";
echo mb_substr($str5, start: -3, length: 3);
echo "<br><br>";

$str6 = "Image.png";
  if (str_ends_with($str6, ".png")) {
    echo "да <br>";
} else {
    echo "нет <br>";
}
echo  "<br>Дальше заданаия с 23 слайда, доделываю<br><br>";
echo "Слайд 23, Задание 1 <br><br>";

$str7 = "megamozg";
$length = mb_strlen($str7);
if ($length > 5) {
    echo mb_substr($str7, 0, 5) . "...";
} else {
    echo "$str7 <br>";
}
echo "<br><br>Слайд 23, Задание 2 <br><br>";

$str8 = "aabbcc";
$newstr = str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str8);
echo $newstr;

echo "<br><br>Слайд 23, Задание 3 <br><br>";

$str9 = "abc abc abc";
echo strrpos($str9, 'c');

echo "<br><br>Слайд 23, Задание 4 <br><br>";

$str10 = "html css php"; 
$array_10 = explode(' ', $str10);
print_r ($array_10);


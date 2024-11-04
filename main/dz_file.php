<?php

$str = fopen('read.txt', 'w');
$strReplace = file_put_contents('Hello.txt', "Hello, world! I'm MAX");
$strReplace = file_get_contents('Hello.txt');
echo $strReplace;

// задание 3
$str2 = fopen('fio.txt', 'r');
$str3 = file_get_contents('fio.txt');
echo "<br>";

echo mb_substr($str3 , 0, 13);

echo "<br>";
//  задание 4

$str1 = file('file1.txt');
$str4 = file('file2.txt');
echo "<br>";

print_r($str1);
echo "<br>";

print_r($str4);
echo "<br>";

$str5 = in_array($str1, $str4);

if (!empty($str5)) {
    file_put_contents('file3.txt', implode(' ', $str5, FILE_APPEND));
    echo 'Новая запись сохранена в file3.txt';
} else {
    echo 'Не удалось сохранить';
}
echo "<br>";

// задание 5

$file1 = file_get_contents('file1.txt');
$file2 = file_get_contents('file2.txt');

$arr1 = explode('.', $file1);
$arr2 = explode('.', $file2);

$arr1 = array_filter(array_map('trim', $arr1));
$arr2 = array_filter(array_map('trim', $arr2));

$arr3 = array_intersect($arr1, $arr2);

if (!empty($arr3)) {
	file_put_contents('file3.txt', implode(' . ', $arr3) . '.');
	echo 'Повторы слов записаны в file3.txt';
} else {
	echo 'повторов нет';
}







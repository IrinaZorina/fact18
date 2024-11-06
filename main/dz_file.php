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
$string1 = file('file1.txt');
$string2 = file('file2.txt');

$array=array_merge($string1,$string2);
$res = array_diff($array, array_diff_assoc($array, array_unique($array)));
file_put_contents("3.txt",$res);


// задание 5

$res2=array_intersect($string1,$string2);
file_put_contents("4.txt",$res2);







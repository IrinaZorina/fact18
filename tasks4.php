<?php
include "header.html";
function f($a,$b) {
  if($a>$b) {
    return $a;
  }
  else return $b;
}
echo f(6,5);

function a ($a,$b) {
$c=sqrt($a**2 + $b**2);
return $c;
}
echo a(5,6);


function c ($num) {
   while($num<1000000) {
    $num*10;
   }
    if($num>1000000) echo "вы достигли предела";
}

function d($length) {
    $arr=[];
    $sum=0;
    $aver=0;
    for($i=0;$i<=$length;$i++) {
        $arr[$i]=mt_rand(1,5);
        $sum+=$arr[$i];
    }
    $aver=$sum/$i;
    return "среднее $aver<br>$sum-сумма";
}
 echo d(5);

  function u($str) {
    return str_word_count($str);
  }
  echo u("sjfjfj fjfkfk kfkldkf");


echo "<h2>Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. </h2>";
function arr($length) {
  $array=[];
for($i=0;$i<=$length;$i++) {
  $array[$i]=mt_rand(1,5);
}
print_r($array);
return $array;
}
arr(4);

echo"<h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</h2>";
function world($str) {
  return str_word_count($str);
}
echo world("sdjkjsfk sdksd sods");

echo"<h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</h2>";
function reversStr($str) {
  $arr=mb_str_split($str);
  for($i=count($arr)-1;$i>=0;$i--) {
    echo "$arr[$i]<br>";
    if($arr[$i]=="," ||$arr[$i]==" ") continue;
  }
}
reversStr("sdsdds,edff");

echo"<h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</h2>";
function lengthStr($str) {
  return strlen($str). "<br>";
}
echo lengthStr("sdsd, dfdf");

echo"<h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку</h2>";

function newStr($str) {
  $arr=mb_str_split($str);
  for($i=0;$i<=count($arr)-1;$i++) {
    echo "$arr[$i]<br>";
    if($arr[$i]=="," ||$arr[$i]==" ") continue;
  }
}
echo newStr("dfdffdf");


echo"<h2>Создать функцию, которая принимает строку. Вернуть количество слов в строке.</h2>";
function world2($str) {
  return str_word_count($str);
}

echo world2("ssdsd,sdds");

function fibo($i) {
  if ($i == 0) return 0;
  if ($i == 1 || $i == 2) {
      return 1;
  }
  else {
      return fibo($i - 1) + fibo($i -2);
  }
} 
  

echo fibo(4);
include "footer.html";

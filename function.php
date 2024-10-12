<?php

function a() {
  $a = 1;
  $b = 2;

  if ($a > $b) {
    return $a;
  }
  elseif ($b > $a) {
    return $b;
  }
  else {
    return null; // Добавлено для случая, когда $a == $b
  }
}

function b($a, $b) {
  $a = 3;
  $b = 4;
  $c_sq = $a * $a + $b * $b;
  $c = sqrt($c_sq);
  return $c;
}

function c($t) {
  if ($t < 1000000) {
    echo $t . "<br>";
    c($t * 10);
  }
  else {
    echo "Ты достиг предела";
  }
}

c(10); //вводим

echo "<br><br>";

function createRandomArray($size = 10, $min = 1, $max = 100) {
  $randomArray = [];
  for ($i = 0; $i < $size; $i++) {
    $randomArray[] = rand($min, $max);
  }
  return $randomArray;
}

$myRandomArray = createRandomArray(15, -5, 50);
print_r($myRandomArray);

echo "<br><br>Продолжаем решать, слайд 16, задание 5 <br><br>";

function calculateAverage($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  $average = $sum / count($numbers);
  return $average;
}

$array = [1, 2, 3, 4, 5];
echo calculateAverage($array);

echo "<br><br>Слайд 16, задание 6 <br><br>";

function calculatewords($str) {
  return str_word_count($str, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ');
}

$str = "Привет, мир!";
echo calculatewords($str); // Проверка

echo "<br><br>Слайд 16, задание 7 <br><br>";

function fibonacci($n) {
  $fib = [];
  if ($n <= 0) {
    return $fib;
  }
  $fib[0] = 0;
  if ($n == 1) {
    return $fib;
  }
  $fib[1] = 1;
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
  }
  return $fib;
}

$fibonacciSequence = fibonacci(10);
print_r($fibonacciSequence);

echo "<br><br>Слайд 17, задание 1 <br><br>";

function generateRandomArray($array) {
  $randomArray = [];
  foreach ($array as $item) {
    $randomArray[] = rand();
  }
  return $randomArray;
}

$inputArray = [1, 2, 3, 4, 5]; // Проверяем
$randomArray = generateRandomArray($inputArray);
print_r($randomArray);

echo "<br><br>Слайд 17, задание 2 <br><br>";

$str22 = "HTML, CSS, PHP, BITRIX";

function calculatewords2($str) {
  $str = str_replace(',', '', $str);
  return str_word_count($str);
}

echo calculatewords2($str22); // Проверка


echo "<br><br>Слайд 17, задание 3 <br><br>";

function reverseString($str) {
    return strrev($str);
}

$str23 = "HTML, CSS, PHP, BITRIX";
echo reverseString($str23); // Проверка


echo "<br><br>Слайд 17, задание 4 <br><br>";

$str24 = "HTML, CSS, PHP, BITRIX";

$length = strlen($str24);
echo $length; // Проверка


echo "<br><br>Слайд 17, задание 6 <br><br>";

function printLettersWithBreak($str) {
    $letters = str_split($str);
    foreach ($letters as $letter) {
        echo $letter . "<br>";
    }
}

$str25 = "HTML, CSS, PHP, BITRIX";
printLettersWithBreak($str25);

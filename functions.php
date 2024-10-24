<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="php, html, css, bitrix" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $vremya?>"/>
    <link rel="stylesheet" href="inc/header.css"/>
    <link rel="stylesheet" href="inc/footers.css"/>
  </head>

<body>
  
<div class="line1"></div>
<?php
    include 'inc/header.php';
?>
<div class="line2"></div>

<p>Урок 9-10 PHP, слайд 16 - задание 4:</p>
<?php
function randomArray() {
    for ($i = 0; $i < 15; $i++) {
      $random [] = mt_rand(0, 100);
    }
    return $random;
  }
  
  $array = randomArray();
  print_r($array);
?>

<p>Урок 9-10 PHP, слайд 16 - задание 5:</p>
<?php
function AcceptanceArray($numbers) {
    $sum = 0;
    foreach ($numbers as $valye) {
        $sum = $sum + $valye;
    }
    $average = $sum / count($numbers);
    return $average;
}
$array = [10, 12, 14, 16, 18, 20];
echo AcceptanceArray($array);
?>

<p>Урок 9-10 PHP, слайд 16 - задание 6:</p>
<?php
function AcceptanceStr($str) {
    return str_word_count($str, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя');
}
$str = 'В начале июля, в чрезвычайно жаркое время';
echo AcceptanceStr($str);
?>

<p>Урок 9-10 PHP, слайд 17 - задание 1:</p>
<?php
function random($array) {
    $randomArr = [];
    foreach ($array as $item) {
      $randomArr[] = mt_rand(0, 10);
    }
    return $randomArr;
  }
  
  $arr = [1, 2, 3, 4, 5]; 
  $randomArr = random($arr);
  print_r($randomArr);
?>

<p>Урок 9-10 PHP, слайд 17 - задание 2:</p>
<?php
function newStroka($str) {
    return str_word_count($str, 0, '');
}
$str = 'HTML, CSS, PHP, BITRIX';
echo newStroka($str);
?>

<p>Урок 9-10 PHP, слайд 17 - задание 3:</p>
<?php
function back($str) {
    return strrev($str);
}
$str = 'HTML, CSS, PHP, BITRIX';
echo back($str);
?>

<p>Урок 9-10 PHP, слайд 17 - задание 4:</p>
<?php
function length($str) {
    return mb_strlen('HTML, CSS, PHP, BITRIX');
}
$str = 'HTML, CSS, PHP, BITRIX';
echo length($str);
?>

<p>Урок 9-10 PHP, слайд 17 - задание 5:</p>
<?php
function new_line($str) {
    $a = str_split($str);
    foreach ($a as $valye) {
        echo $valye . "<br>";
    }
}
$str = 'HTML, CSS, PHP, BITRIX';
new_line($str);
?>


<?php
    include 'inc/footer.php';
?>

</body>
</html>
<?php
//$a = mt_rand(1, 10);
//$b = mt_rand(1, 10);
//
//if ($a > $b) {
//    echo "a = $a больше b = $b";
//} elseif ($a < $b) {
//    echo "b= $b больше a= $a ";
//} else {
//    echo "a = $a равны b = $b";
//}
//

//$var1 = mt_rand(1, 10);
//$var2 = mt_rand(1, 10);
//
//
//echo "a = $var1 b = $var2 ";
//$max = ($var1 > $var2) ? $var1 : $var2;
//echo $max;


//$a = mt_rand(1, 10);
//$b = mt_rand(1, 10);
//$c = mt_rand(1, 10);
//
//$d = ($b * $b) - 4 * $a * $c;
//
//if ($d > 0) {
//    $x1 = (-$b + sqrt($d)) / (2 * $a);
//    $x2 = (-$b - sqrt($d)) / (2 * $a);
//    echo "<br> корень 1 = $x1 и корень 2 = $x2 <br>";
//} elseif ( $d < 0) {
//    echo "<br> нет корней";
//} else {
//    $x = (-$b + sqrt($d)) / 2 * $a;
//    echo "корень равен $x";
//}

//$i = 0;
//
//while (++$i < 10) {
//    if ($i == 5) continue;
//    echo $i . '<br>';
//
//}
//echo "exit";

//$i = 1;
//
//do
//{
//    echo $i;
//} while ($i++ <10);

//for ($a = 1980; $a <= 2024; $a++) {
//     $a;
//}

//$user = '';
//
//switch ($user) {
//    case 'клиент' :
//        echo 'Привет клиент';
//        break;
//    case 'админ':
//        echo 'привет админ';
//        break;
//    case 'менеджер' :
//        echo 'привет менеджер';
//        break;
//    default:
//        echo 'Привет';
//}

//include_once 'about.php';
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
выберите год
<select>
    <?php
    for ($a = 1980; $a <= 2024; ++$a)
        echo "<option> $a </option>";
    ?>
</select>

23 слайд задание 1

<?php
 for ($a = 1; $a <=30; ++$a) {
     if ($a % 2 == 0) {
         echo "<br> Число кратны 2м = $a";
     }
 }
?>
<br>
<br>
23 слайд задание 2
<?php
for ($i = 1; $i < 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "<b>делится на 3 и 5 = $i </b> <br>";
    } elseif ($i % 3 == 0) {
        echo "<i>делится на 3 =  $i </i> <br>";
    } else {
        echo "$i <br>";
    }
}
?>

<br><br>
<?php

?>

<br>
23 слайд задание 4
<?php

$sum = 0;
for ($i = 1, $j = 1; $sum < 10; $i += 3 , $j++) {
    $sum += $i / $j;
    echo "число = $sum " ;
}
echo "количество повторений = $j";
?>
23 слайд задание 3
<?php
//$sumPI = 0;
//$four = 4;
//$numberPI = 0;
//for ($v = 1, $n1 = 3; $sumPI < 50; $n1 +=2) {
//        $sumPI += 1 - $v / $n1 + $v / $n1 - $v / $n1;
//        $numberPI += $four * $sumPI;
//}
//echo "<br> number PI = $numberPI        ";
//echo "n1 = $n1";
?>




<br><br>
24 слайд задание 1
<pre>
<?php
$randomNumber = mt_rand(10, 122);
$sum1 = 0;
echo  "Случайное число =  $randomNumber" . PHP_EOL;
while ($randomNumber != 0) {
    $number = $randomNumber % 10;
    if ($number % 2 == 0) {
        $sum1 += $number ;
    }
    $randomNumber /= 10;
}
echo "сумма чисел = $sum1 ";

?>
</pre>

<br><br>
Слайд 25 задание 1
<?php 
for ($i=0; $i < 20 ; $i++) { 
    if ($i >= 5 && $i <= 13) {
        echo "<br> $i";
    }
}

?>

<br><br>
Слайд 25 задание 2
<?php
$number2 = 1000;
$repite = 1;
do {
    $number2 = ($number2 / 2);
    if ($number2 < 30) {
        break;
    }
    $repite++;
    echo "<br> number 2  = $number2";
} while ($number2 > 20);
  echo "<br> repite = $repite";
?>

<br><br>

<?php


?>

<br><br>

<?php
$i = 5;
for ($n = 0; $n <= (10 - $i); $n++) {
    echo "$n<br>";
}
?>

<?php
$pi = 0;
$t = 0.01;
$d = 1;
$s = 1;
$count = 0;
while (abs($pi - M_PI) >= 0.01){
    $pi += $s * (4/$d);
    $s *= -1;
    $d += 2;
    $count ++;
}
echo "min slag - $count";
?>












</body>
</html>




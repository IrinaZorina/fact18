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
    <link rel="stylesheet" href="header.css"/>
    <link rel="stylesheet" href="footers.css"/>
  </head>

<body>
  
<div class="line1"></div>
<?php
    include 'header.php';
?>
<div class="line2"></div>
  
<p>Урок 3-4 PHP, слайд 23 - задание 1:</p>
<img src="../assets/image/snimok.png">
<br>
<?php
$i = 1;
while ($i++ <= 30) {
    if ($i % 2 == 0) {
        echo "$i";
    } else
    echo "<br>";
}
?>

<p>Урок 3-4 PHP, слайд 23 - задание 2:</p>
<img src="../assets/image/snimok1.png">
<br>
<?php
for ($i = 1; $i <=50; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo "<b> $i </b> <br>"; 
    }
    elseif ($i % 3 == 0) {
        echo "<i> $i </i> <br>";
    }
    else {
        echo "$i <br>";
    }
}
?>

<p>Урок 3-4 PHP, слайд 23 - задание 4:</p>
<img src="../assets/image/snimok2.png">
<br>
<?php
$sum = 0;
$count = 0;
$a = 1;
$b = 1;
$i = 0;
while ($sum < 10) {
    $count = $a/$b;
    $a = $a + 3;
    $b = $b + 1;
    $sum = $sum + $count;
    $i = $i + 1;
}
echo "$i - это минимальное количество элементов последовательности, которое нужно";
?>

<p>Урок 3-4 PHP, слайд 24 - задание 1:</p>
<img src="../assets/image/snimok3.png">
<br>
<?php
$k = mt_rand(10,1000);
$sum = 0;
$a = 0;
while ($k >= 1) {
    $a = $k % 10;
    if ($a % 2 == 0) {
        $sum = $sum + $a;
        $k = $k / 10;
    } 
    else {
        $k = $k / 10;
    }   
}
echo $sum;
?>

<p>Урок 3-4 PHP, слайд 25 - задание 1:</p>
<img src="../assets/image/snimok4.png">
<br>
<?php
for ($i = 5; $i <= 13; $i++) {
    echo $i . '<br>';
}
?>

<p>Урок 3-4 PHP, слайд 25 - задание 2:</p>
<img src="../assets/image/snimok5.png">
<br>
<?php
$i = 0;
$num = 1000;
    while ($num > 50) {
        $num = $num / 2;
        $i = ++$i;
    }
echo $i . '- количество итераций <br>';
echo $num . '- получившееся число <br>';
?>

<img src="../assets/image/snimok6.png">
<br>
<?php
for ($num = 1000, $i = 0; $num >= 50; $num/2, $i++){
    $num = $num / 2;
}
echo $i . '- количество итераций <br>';
echo $num . '- получившееся число <br>';
?>

<p>Урок 3-4 PHP, слайд 25 - задание 3:</p>
<img src="../assets/image/snimok7.png">
<br>
<?php
$i = mt_rand(0, 10);
if ($i == 0) {
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    }
} elseif ($i == 1) {
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
} elseif ($i == 2) {
    for ($i = 0; $i <= 8; $i++) {
        echo $i;
    }
} elseif ($i == 3) {
    for ($i = 0; $i < 8; $i++) {
        echo $i;
    }
} elseif ($i == 4) {
    for ($i = 0; $i <= 6; $i++) {
        echo $i;
    }
} elseif ($i == 5) {
    for ($i = 0; $i < 6; $i++) {
        echo $i;
    }
} elseif ($i == 6) {
    for ($i = 0; $i <= 4; $i++) {
        echo $i;
    }
} elseif ($i == 7) {
    for ($i = 0; $i < 4; $i++) {
        echo $i;
    }
} elseif ($i == 8) {
    for ($i = 0; $i <= 2; $i++) {
        echo $i;
    }
} elseif ($i == 9) {
    for ($i = 0; $i < 2; $i++) {
        echo $i;
    }
} elseif ($i == 10) {
    for ($i = 0; $i <= 0; $i++) {
        echo $i;
    }
}
?>


<?php
    include 'footer.php';
?>

</body>
</html>
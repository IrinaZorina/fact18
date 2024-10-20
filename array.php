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

<p>Урок 5-6 PHP, слайд 15 - задание 4:</p>

<?php
$arr = [];
$min = -100;
$max = 100;

for ($i = 0; $i < 10; $i++) {
  $arr [] = mt_rand(-99, 99);
}

foreach ($arr as $valye) {
  if ($valye > 0 && $valye < $max) {
  $max = $valye;
}
  if ($valye < 0 && $valye > $min) {
  $min = $valye;
  }
}
echo "Минимально положительное: $max<br>";
echo "Максимально отрицательное: $min<br>";
?>

<p>Урок 5-6 PHP, слайд 16 - задание 5:</p>

<?php
$summa = 0;
$arr = [
    "ychenik1" => [
        "mathematics" => [3, 3, 3, 3],
        "phisycs" => [4, 3, 4, 5],
        "chemistry" => [4, 3, 3, 5],
        "informatics" => [5, 4, 4, 5]
        ],

    "ychenik2" => [
        "mathematics" => [5, 4, 4, 5],
        "phisycs" => [3, 3, 5, 5],
        "chemistry" => [5, 4, 5, 4],
        "informatics" => [4, 3, 4, 3]
        ],

    "ychenik3" => [
        "mathematics" => [5, 4, 3, 4],
         "phisycs" => [5, 3, 4, 5],
         "chemistry" => [4, 3, 3, 5],
         "informatics" => [3, 5, 4, 3]
         ],

     "ychenik4" => [
        "mathematics" => [5, 5, 5, 5],
         "phisycs" => [4, 4, 4, 5],
         "chemistry" => [4, 5, 4, 5],
         "informatics" => [5, 4, 5, 4]
     ]
];

foreach($arr as $ychenik => $value1) {
    echo "<br>" . $ychenik . " " . "=> <br>";
    
    foreach($value1 as $predmet => $value2) {
        for ($i = 0; $i <= count($value2) - 1; $i++){
            $summa = $summa + $value2[$i];
  }

    
  $a = $summa / count($value2);
  echo "$predmet => Сумма равна: $summa <br>";
  echo "$predmet => Среднее значение равно: $a <br>";
  $summa = 0;
    }
};  
?>


<?php
    include 'inc/footer.php';
?>
</body>
</html>
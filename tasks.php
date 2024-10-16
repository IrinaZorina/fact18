<?php
include 'header.php';

echo " <br> Задание1, слайд23 <br><br>";
for ($i = 1; $i <= 30; $i++) {
    if ($i % 2 == 0) {
        echo "  $i <br>";
    }
}

echo "<br> Задание2, слайд23 <br><br>";
for ($i = 1; $i < 50; $i++) {
    
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo " <b> $i </b>";
    }
    elseif ($i % 3 == 0) {
        echo "<i> $i </i>";
        }
    else {
      echo "$i";
    }
}

function findMinElements($S) {
    $sum = 0;
    $k = 0;
    $gamma = 0.5772156649; // Постоянная Эйлера-Маскерони

    while ($sum <= $S) {
        $k++;
        $sum = 3 * $k - 2 * (log($k) + $gamma);
    }

    return $k;
}

$S = 10;
$minElements = findMinElements($S);
echo "<br><br>Задание4 слайд 23<br><br> " . $minElements;

echo " <br><br> Задание1, слайд25 <br><br>";
$i = 0;
    while ($i++ < 13) {
        echo "  $i <br>";
    }

echo " <br><br> Задание2, слайд25 <br><br>";
$num = 1000;
$iteration = 0;
    while ($num > 50) {
        $num /=2;
        $iteration++;
        echo "$num <br>";
    }
        echo "Количество Итерация: $iteration";
    
echo " <br><br> Задание3, слайд25 <br><br>";
$i = 0;
switch ($i) {
    case 0:
        echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10<br>";
        break;
    case 1:
        echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9<br>";
        break;
    case 2:
        echo "0, 1, 2, 3, 4, 5, 6, 7, 8<br>";
        break;
    case 3:
        echo "0, 1, 2, 3, 4, 5, 6, 7<br>";
        break;
    case 4:
        echo "0, 1, 2, 3, 4, 5, 6<br>";
        break;
    case 5:
        echo "0, 1, 2, 3, 4, 5<br>";
        break;
    case 6:
        echo "0, 1, 2, 3, 4<br>";
        break;
    case 7:
        echo "0, 1, 2, 3<br>";
        break;
    case 8:
        echo "0, 1, 2<br>";
        break;
    case 9:
        echo "0, 1<br>";
        break;
    case 10:
        echo "0<br>";
        break;
}
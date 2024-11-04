<?php


$currentHour = (int) date('H');
$isDayTime = true;

if ($currentHour < 8 || $currentHour > 20) {
    $isDayTime = false;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/picture.css">
</head>
<body class="<?=$isDayTime ? 'light-theme' : 'dark-theme'?>">


<header>
    <nav>
        <ul class="transition">
            <li class="transition1">
                <a href="../main/Mendeleev.html" title="переход на страницу ячейки таблицы Менделеева">Ячейка водорода</a>
            </li>
            <li class="transition1">
                <a href="cirkle.php" title="Переход на циклы">Циклы</a>
            </li>
            <li class="transition1">
                <a href="dz_array.php"  title="Переход на массивы"> Массивы </a>
            </li>
            <li class="transition1">
                <a href="../main/string.php" title="Переход на страницу со строками"> Строки </a>
            </li>
            <li class="transition1">
                <a href="../main/function.php" title="Переход на страницу с функциями"> Функции </a>
            </li>
            <li class="transition1">
                <a href="../main/GET_POST.php" title="Переход на страницу с методами запроса"> Запросы GET и POST </a>
            </li>
        </ul>
    </nav>

    <div class="create-line"></div>

</header>
<p></p>
</html>


<div class="homeWork">Задание 1
<?php
$sum = 0;
$number = array(50 , 45, 40, 35, 30);

for ($i = 0; $i < count($number); $i++) {
    $sum = $sum + $number[$i];
};
echo $sum;
    ?>
</div>
<br>
<div class="homeWork">Задание 2 <?php
$randomArray = [];
for ($i = 0; $i < 10; $i++) {
    $randomArray[$i] = mt_rand(0, 50);
    echo "random number =  $randomArray[$i]" . "<br>";
}
for ($i = count($randomArray)-1; $i >= 0; $i--){
    echo "random array = $randomArray[$i] <br>" ;
}
//for ($i = 9; $i >=0; $i--) {
//    echo $randomArray[$i] . "cirkle <br>";
//}
//$var = 9;
//while ($var >=0 ) {
//    echo "$var";
//    $var--;
//}
?>
</div>
<div class="homeWork"> Задание 3
    <?php
$arr = ['1.png', '2.png', '3.png'];
$i = mt_rand(0, 2);
echo "<img src = '../img/$arr[$i]'  alt='$arr[$i]'>";
?>
</div>
<div>
<?php
//$natNumber = [];
//for ($i = 0; $i < 10; $i++) {
//    $natNumber[$i] = mt_rand(-100, 100);
//echo $natNumber[$i] . ' ';
//}
//
//$minPlus = 0;
//$maxNeg = 0;
//
//foreach ($arr as $value) {
//    if ($value > 0) {
//        if ($value > $minPlus) {
//            $minPlus = $value;
//        }
//    }
//    elseif ($value < 0) {
//        if ($value < $maxNeg) {
//            $maxNeg = $value;
//        }
//    }
//}
//
//echo "<br>";
//echo "$minPlus = minimal Plus";
//echo "<br>";
//echo "$maxNeg = max nega";
?>
</div>

<div class="homeWork"> Задание 5
    <?php
$sumMath = 0;
$midMath = 0;
$sumPhysics = 0;
$midPhysics = 0;
$sumschemistry = 0;
$midChemistry = 0;
$sumcompScince = 0;
$midcompScince = 0;
$lesson = [
    "math" => [3, 4, 5, 3, 4],
    "physics" => [4, 5, 4, 3, 5],
    "schemistry" => [4, 5, 4, 3, 4],
    "compScince" => [5, 5, 4 , 5 ,5],
];
for ($i = 0; $i < count($lesson["math"]); $i++) {
    $sumMath = $sumMath + $lesson["math"][$i];
    $midMath = $sumMath / count($lesson["math"]);
}
echo "<br>сумма оценок по математике = $sumMath ";
echo "средняя оценка по математике = $midMath";

for ($i = 0; $i < count($lesson["physics"]); $i++) {
    $sumPhysics = $sumPhysics + $lesson["physics"][$i];
    $midPhysics = $sumPhysics / count($lesson["physics"]);
}
echo "<br>Сумма оценок по физике  = $sumPhysics  ";
echo "средняя оценка по физике = $midPhysics ";

for ($i = 0; $i < count($lesson["schemistry"]); $i++) {
    $sumschemistry = $sumschemistry + $lesson["schemistry"][$i];
    $midChemistry = $sumschemistry / count($lesson["schemistry"]);
}
echo "<br> Сумма оценок по химии = $sumschemistry ";
echo "средняя оценка по химии = $midChemistry ";

for ($i = 0; $i < count($lesson["compScince"]); $i++) {
    $sumcompScince = $sumcompScince + $lesson["compScince"][$i];
    $midcompScince = $sumcompScince / count($lesson["compScince"]);
}
echo "<br> Сумма оценок по химии = $sumcompScince ";
echo "средняя оценка по химии = $midcompScince ";
?>
</div>
<div class="homeWork"> Задание 6
<?php
$date = [
    'Куба' => ['Май' => 34, 'Июнь' => 36, 'Июль' => 42, 'Агуст' => 41, 'Сентябрь' => 40],
    'Тринидад' => ['Май' => 35, 'Июнь' => 37, 'Июль' => 43, 'Агуст' => 44, 'Сентябрь' => 42],
    'Ямайка' => ['Май' => 36, 'Июнь' => 38, 'Июль' => 44, 'Агуст' => 45, 'Сентябрь' => 43],
    'Гаити' => ['Май' => 33, 'Июнь' => 35, 'Июль' => 40, 'Агуст' => 43, 'Сентябрь' => 41],
];
echo "<pre>";
var_dump ($date);
echo "</pre>";
$maxTemp = [];
$maxMonth = [];
foreach ($date as $island => $month) {
    $maxTemp = max($month);
    $maxMonth = array_search($maxTemp, $month);
    $maxTemp[$island] = ['Месяц' => $maxMonth, 'Максимальная температура' => $maxTemp];
}
echo '<pre>';
print_r($maxTemp);
echo '</pre>';
    ?>
</div>
<div class="homeWork"> Задание 7
    <?php
$arr = [];
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 6; $j++) {
        $arr[$i][$j] = mt_rand(0, 10);
    }
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
$re1 = 1;
$re2 = 1;
$re3 = 1;
?>
</div>









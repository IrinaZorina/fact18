<?php
// 1
$sum = 0;
$number = array(50 , 45, 40, 35, 30);

for ($i = 0; $i < count($number); $i++) {
    $sum = $sum + $number[$i];
};
echo $sum;

echo '<br>';
// 2
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

//3
$arr = ['1.png', '2.png', '3.png'];
$i = mt_rand(0, 2);
echo "<img src = 'img/$arr[$i]'  alt='$arr[$i]'>";

//4

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


//5
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

// 6

$island = [
    "firstIs" => [
        "name" => "Куба",
        "midTemp" => 42,
        "maxTemp" => 0,
    ],
    "secondIs" => [
        "name" => "Тринидад",
        "midTemp" => 44,
        "maxTemp" => 0
    ],
    "thirdIs" => [
        "name" => "Ямайка",
        "midTemp" => 40,
        "maxTemp" => 0
    ],
    "fourIs" => [
        "name" => "Гаити",
        "midTemp" => 48,
        "maxTemp" => 0
    ],
];

$maxTemp = [56, 52, 58, 60];
$month = ["Июль", "Август", "Июнь"];

$maxtempIsland = [
    "islandKuba" => [
        "name" => $island["firstIs"]["name"],
        "midTemp" => $island["firstIs"]["midTemp"],
        "maxTemp" => $maxTemp[0],
        "month" => $month[0]
    ],

];
$maxtempIsland[] = [
    "islandTrinidad" => [
        "name" => $island["secondIs"]["name"],
        "midTemp" => $island["secondIs"]["midTemp"],
        "maxTemp" => $maxTemp[1],
        "month" => $month[2]
    ],

];
$maxtempIsland[] = [
    "islandJamaika" => [
        "name" => $island["thirdIs"]["name"],
        "midTemp" => $island["thirdIs"]["midTemp"],
        "maxTemp" => $maxTemp[2],
        "month" => $month[1]
    ],

];
$maxtempIsland[] = [
    "islandGaiti" => [
        "name" => $island["fourIs"]["name"],
        "midTemp" => $island["fourIs"]["midTemp"],
        "maxTemp" => $maxTemp[3],
        "month" => $month[0]
    ],

];
echo "<pre>";
var_dump ($maxtempIsland);
echo "</pre>";
// 7
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










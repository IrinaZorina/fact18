<?php
echo '<p> Задание 1 <br> </p>';

$arr1 = [50, 45, 40, 35, 30];
$sum = 0;
  foreach ($arr1 as $value) {
    $sum = $sum + $value;
}
  echo $sum . '<br>';

echo '<p> Задание 2 <br> </p>';

$arr2 = [];
for ($i = 0; $i < 10; $i++) {
  $arr3 [] = mt_rand(0, 100);
}
print_r($arr3); //вывод массива прямой порядок
  echo '<br>';
for ($i = count($arr3) - 1; $i >= 0; $i--) { //обратный порядок
print_r($arr3[$i] . ' ');
}

echo '<p> Задание 3 <br> </p>'; 
$arr4 = ['Кот1.png', 'Кот2.png', 'Кот3.png', 'Кот4.png'];
$i = mt_rand(0, 3);
echo '<img src="/assets/images/' . $arr4[$i] . '">';

echo '<p> Задание 4 <br> </p>'; 
$arr5 = [];
for ($i = 0; $i < 10; $i++) {
  $arr5 [] = mt_rand(-100, 100);
}

$min_n = -101;
$max_p = 101;

foreach ($arr5 as $n) {
  if ($n > 0 && $n < $max_p) {
  $max_p = $n;
}
  if ($n < 0 && $n > $min_n) {
  $min_n = $n;
  }
}
echo "Минимально положительное: $max_p<br>";
echo "Максимально отрицательное: $min_n<br>";

echo '<p> Задание 5 <br> </p>'; 
$arr6 = [
  'математика'  => [5, 5, 4, 3, 3],
  'физика'      => [3, 3, 4, 5, 4],
  'химия'       => [3, 4, 5, 4, 3],
  'информатика' => [5, 5, 5, 5, 5]
];

$sumMath = $sumPhysics = $sumChemistry = $sumInformatics = 0;
$countMath = $countPhysics = $countChemistry = $countInformatics = 0;

foreach ($arr6['математика'] as $grade) {
    $sumMath += $grade;
    $countMath++;
}

foreach ($arr6['физика'] as $grade) {
    $sumPhysics += $grade;
    $countPhysics++;
}

foreach ($arr6['химия'] as $grade) {
    $sumChemistry += $grade;
    $countChemistry++;
}

foreach ($arr6['информатика'] as $grade) {
    $sumInformatics += $grade;
    $countInformatics++;
}


$averageMath = $sumMath / $countMath;
$averagePhysics = $sumPhysics / $countPhysics;
$averageChemistry = $sumChemistry / $countChemistry;
$averageInformatics = $sumInformatics / $countInformatics;

echo "Сумма  по математике: $sumMath<br>";
echo "Сумма  по физике: $sumPhysics<br>";
echo "Сумма  по химии: $sumChemistry<br>";
echo "Сумма  по информатике: $sumInformatics<br><br>";
echo "Средняя  по математике: $averageMath<br>";
echo "Средняя  по физике: $averagePhysics<br>";
echo "Средняя  по химии: $averageChemistry<br>";
echo "Средняя  по информатике: $averageInformatics<br>";

echo '<p> Задание 6 <br> </p>'; 
$months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

$cuba = [25, 26, 27, 29, 30, 30, 31 ,32, 30, 29, 26, 26];
$trinidad = [26, 26, 28, 29, 30, 32, 30 ,31, 30, 29, 26, 26];
$jamaica = [26, 26, 29, 29, 31, 33, 30 ,31, 30, 29, 26, 26];
$haiti = [27, 26, 27, 29, 30, 32, 33 ,31, 30, 27, 26, 26];

$maxTemperatures = [];

foreach ($months as $index => $month) {
    $temperatures = [
        $cuba[$index],
        $trinidad[$index],
        $jamaica[$index],
        $haiti[$index]
    ];

    // для хранения максимальной температуры
    $maxTemperature = $temperatures[0];

    // Перебор температур и нахождение максимальной
    for ($i = 1; $i < count($temperatures); $i++) {
        if ($temperatures[$i] > $maxTemperature) {
            $maxTemperature = $temperatures[$i];
        }
    }

    // Запись максимальной температуры в массив
    $maxTemperatures[$month] = $maxTemperature;
}

echo "<pre>";
print_r($maxTemperatures);
echo "</pre>";

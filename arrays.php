<?php require_once 'header.php'?>
Задание 1.
Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.
<br>
<?php
$taskOneArr = [50, 45, 40, 35, 30];
$resultTaskOne =0;
for($i = 0; $i < count($taskOneArr); $i++){
    $resultTaskOne = $resultTaskOne + $taskOneArr[$i];
}
echo $resultTaskOne;
?>
<br>
Задание 2.
Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.
<br>
<?php
$taskTwoArr = [];
for($i = 0; $i < 15; $i++){
    $taskTwoArr[$i] = mt_rand(1, 20);
}
for ($i = 14; $i >= 0; $i--){
    echo $taskTwoArr[$i] . ' ';
}
?>
<br>
Задание 3.
Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
<br>
<?php
$taskThreeArr = ["1.jpg", "2.jpg", "3.jpg"];
$i = mt_rand(0, 2);
$px = '"150px"';
echo "<img src=assets/image/" . "$taskThreeArr[$i]" . ">";
?>
<br>
Задание 4.
Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.
<br>
<?php
$taskFourArr = [];
for($i = 0; $i < 20; $i++){
    $taskFourArr[$i] = mt_rand(-100, 100);
}
$minPositive = 0;
$maxNegative = 0;
foreach ($taskFourArr as $value){
    if($value > 0){
        $minPositive = $value;
    }
    elseif ($value < 0){
        $maxNegative = $value;
    }
}
echo 'Минимальное положительное' . ' ' . $minPositive;
echo "<br>";
echo 'Максимальное отрицательное' . ' ' . $maxNegative;
?>
<?php require_once 'footer.php'?>

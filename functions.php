<?php require_once 'header.php'?>
Задание 1.
Создать функцию, которая сравнивает два числа и возвращает наибольшее.
<br>
<?php
$taskOneValue1 = mt_rand(1, 10);
$taskOneValue2 = mt_rand(1, 10);
function taskOne($taskOneValue1,$taskOneValue2){
    if($taskOneValue1 > $taskOneValue2){
        return $taskOneValue1;
    }
    elseif ($taskOneValue1 < $taskOneValue2){
        return $taskOneValue2;
    }
    else{
        return $taskOneValue1;
    }
}
echo taskOne($taskOneValue1,$taskOneValue2);
?>
<br>
Задание 2.
Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.
<br>
<?php
$taskTwoValue1 = mt_rand(1, 10);
$taskTwoValue2 = mt_rand(1, 10);
$taskOneValue3 = 0;
function taskTwo($taskTwoValue1,$taskTwoValue2){
    return ((int)($taskTwoValue3 = sqrt(pow($taskTwoValue1,2) + pow($taskTwoValue2,2))));
}
echo taskTwo($taskTwoValue1,$taskTwoValue2);
?>
<br>
Задание 3.
Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
<br>
<?php
$taskThreeValue1 = 10;
function taskThree($taskThreeValue1){
    while ($taskThreeValue1 < 1000000){
        $taskThreeValue1 = $taskThreeValue1 * 10;
        echo $taskThreeValue1 . ' ';
    }
    echo  "<br>" . 'Вы достигли предела';
}
echo taskThree($taskThreeValue1);
?>
<br>

<?php require_once 'footer.php'?>

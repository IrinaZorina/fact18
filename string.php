<?php require_once 'header.php'?>
Задание 1.
Дата строка «fact». Привести строку к виду «Fact».
<br>
<?php
$taskOneStr = 'fact';
echo str_replace("f", "F", $taskOneStr);
?>
<br>
Задание 2.
Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».
<br>
<?php
$taskTwoStr = 'Ситников Кирилл Вячеславович';
$tskTwoArr[0] = mb_substr($taskTwoStr, 0, -20);
$tskTwoArr[1] = mb_substr($taskTwoStr, 9, -13);
$tskTwoArr[2] = mb_substr($taskTwoStr, 15);
echo $tskTwoArr[1] . ' ' . $tskTwoArr[0];
?>
<br>
Задание 3.
Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).
<br>
<?php
$taskThreeStr = "Привет, мир!";
$taskThreeStr1 = strtolower($taskThreeStr);
$arr = mb_str_split($taskThreeStr1);
$var = 0;
foreach ($arr as $k => $v) {
    if($v == "и"){
        $var++;
    }
}
echo $var;
?>
<br>
Задание 4.
Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
<br>
<?php
$taskFourStr = 'html css php';
$taskFourArr = explode(' ',$taskFourStr);
echo $taskFourArr[0] . "," . ' ';
echo $taskFourArr[1] . "," . ' ';
echo $taskFourArr[2];
?>
<br>
Задание 5.
Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
<br>
<?php
$taskFiveStr = '.png';
$taskFiveArr = mb_str_split($taskFiveStr);
if($taskFiveArr[(count($taskFiveArr) - 1)] == 'g'){
    if($taskFiveArr[(count($taskFiveArr) - 2)] == 'n'){
        if($taskFiveArr[(count($taskFiveArr) - 3)] == 'p'){
            if($taskFiveArr[(count($taskFiveArr) - 4)] == '.'){
                echo 'да';
            }
        }
    }
}
else{
    echo 'нет';
}
?>
<?php require_once 'footer.php'?>

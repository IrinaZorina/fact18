<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>

<div class="TaskCycles">



<?php
/*
 * Создайте куки с логином посетителя и временем последнего захода.
 * Куки должны хранится максимум 1 час.
 * Примечание: возможно понадобится форма для ввода логина.
 */

echo 'Задача 2, слайд 12. Создайте куки с логином посетителя и временем последнего захода. 
Куки должны хранится максимум 1 час. 
Примечание: возможно понадобится форма для ввода логина.';
echo '<br>';
$Login = $_POST['Login'];
setcookie('login', $Login, time() + 3600);
$timeOfEntering = isset($_POST['Login']) ? $timeOfEntering = date("F j, Y, g:i a") : '';

echo $timeOfEntering;
setcookie('TimeOfEntering', $timeOfEntering, time() + 3600);
?>


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
<h1> Введите ваш логин</h1>
<form action="" method="post">
    <input type="text" name='Login'>
    <input type="submit">
</form>
</body>
</html>

<?php
echo '<br><br><br><br>';
echo 'Задача 3, слайд 12. Сделайте счетчик посещения сайта посетителем. 
Каждый раз, заходя на сайт, он должен видеть надпись: Вы посетили наш сайт % раз!.';


$visitCount = 0;

$visitCount = (isset($_COOKIE['countEnters'])) ? $_COOKIE['countEnters'] + 1 : 1;

setcookie('countEnters', $visitCount, time() + 3600);


echo '<br><br><br>';
echo 'Количество посещений сайта: ' . $visitCount;
echo '<br><br><br><br><br><br><br><br><br><br>';
?>

</div>




<?php

include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>
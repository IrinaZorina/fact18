
<?php
session_start();
$time_now=date("Y-m-d H:i:s");
$last_time=isset($_COOKIE['time'])?$_COOKIE['time']:'';
$time = date('G');
if ($time > 20 || $time < 8) {
    $cl_time = "../assets/css/night.css";
} else {
    $cl_time = "../assets/css/day.css";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $cl_time ?>">
    <link rel="stylesheet" href="../assets/css/table.css">
    <title>Сайт Вареникова</title>
</head>
<body <?php echo isset($_COOKIE['b_color'])?'style="background-color:' . $_COOKIE['b_color'].'"':'class=time';?>>
<header>
    <nav class="container_nav">
        <a href="../index_my.php" target="_blank" class="text_nav"><b>О себе</b></a>
        <a href="../cycle.php" target="_blank" class="text_nav"><b>Циклы</b></a>
        <a href="../array.php" target="_blank" class="text_nav"><b>Массивы</b></a>
        <a href="../string.php" target="_blank" class="text_nav"><b>Строки</b></a>
        <a href="../form.php" target="_blank" class="text_nav"><b>Формы</b></a>
        <a href="../function.php" target="_blank" class="text_nav"><b>Функции</b></a>
        <a href="../table.php" target="_blank" class="text_nav"><b>Таблица Менделеева</b></a>
        <a href="../lesson_php11_12.php" target="_blank" class="text_nav"><b>GET/POST</b></a>
        <a href="../files.php" target="_blank" class="text_nav"><b>Файлы</b></a>
        <a href="../enter.php" target="_blank" class="text_nav"><b>Авторизация</b></a>
        <a href="../exit.php" target="_blank" class="text_nav"><b>Выход</b></a>
    </nav>

    </header>
<?php
$time = date('G');
if ($time > 20 || $time < 8) {
    $cl_time = "assets/css/style_about_night.css";
} else {
    $cl_time = "assets/css/style_about_day.css";
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
    <link rel="stylesheet" href="assets/css/style_table.css">
    <title>Сайт Вареникова</title>
</head>
<body class="cl_time">
<header>
    <nav class="conteiner_nav">
        <a href="index.php" target="_blank" class="a"><b>О себе</b></a>
        <a href="table.php" target="_blank" class="a"><b>Таблица Менделеева</b></a>
        <a href="cikli.php" target="_blank" class="a"><b>Циклы</b></a>
        <a href="massiv.php" target="_blank" class="a"><b>Массивы</b></a>
    </nav>
    </header>
<?php
$time = date("G");
if ($time > 8 and $time < 18) {
    $a = "AssetsForTheSiteWithBlocks_DayNight/StylesForTheSiteWithBlocks_Day.css";
}
else {
    $a = "AssetsForTheSiteWithBlocks_DayNight/StylesForTheSiteWithBlocks_Night.css";
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
    <link rel="stylesheet" href="<?php echo "$a" ?>">
</head>
<body>
<header class="Header">
<div>
   <a href="AssetsForTheSiteWithBlocks_DayNight/MendeleevFe/MendeleevFe.php">Ссылка на элемент таблицы Менделеева</a>
</div>
<div>
     <a href="Cycles.php">Ссылка на Домашнюю работу по циклам</a>
</div>
<div>
     <a href="arrays.php">Ссылка на Домашнюю работу по массивам</a>
</div>
</header>

</body>
</html>



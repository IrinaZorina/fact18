<?php
print_r($_GET);
$l = $_GET['l'];
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
<div><h2>Лаб3</h2></div>

    <a href="1.php?l=<?=($l = 1)?>" title="переход">Lab1</a>

    <a href="2.php?l=<?=($l = 2)?>" title="переход">Lab2</a>

    <a href="4.php?l=<?=($l = 4)?>" title="переход">Lab4</a>


</body>
</html>
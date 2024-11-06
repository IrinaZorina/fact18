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
    <title>1 picture</title>
</head>
<body>

  <form action="" method="post">

<div></div>
    <a href="1.php?l=<?=($l = 1);?>>" title="переход">Лаб1</a>-->

<li>
    <a href="2.php?l=<?=($l = 2);?>" title="переход">Лаб2</a>-->
</li>
<li>
    <a href="3.php?l=<?=($l = 3);?>>" title="переход">Лаб3</a>-->
</li>
<li>
    <a href="4.php?l=<?=($l = 4);?>>" title="переход">Лаб4</a>-->
</li>
</body>
</html>
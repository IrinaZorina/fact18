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
<div><h2><?php echo $l ?>Лаб1</h2></div>
<li>
    <a href="2.php?l=<?=($l = 2);?>" title="переход">Lab2</a>
</li>
<li>
    <a href="3.php?l=<?=($l = 3);?>">Lab3</a>
</li>
<li>
    <a href="4.php?l=<?=($l = 4);?>">Lab4</a>
</li>

</body>
</html>
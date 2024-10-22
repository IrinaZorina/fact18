<?php
$image=isset($_GET['image']) ? $_GET['image'] : 1;
echo $image;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<img src="/assets/images/<?=$image?>.png">
<a href="index_img.php?image=<?=($image>1)?($image-1):4?>">Назад</a>
<a href="index_img.php?image=<?=($image<4)?($image+1):1?>">Вперед</a>
</body>
</html>
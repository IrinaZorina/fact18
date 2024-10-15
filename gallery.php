<?php
//получаем id изображения
$image = $_GET['image'] ?? 1;
$image = intval($image);

if ($image < 1) {
    $image  = 5;
} elseif ($image > 5) {
    $image = 1;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Галерея "Audi"</title>
    <style>
        img {
            max-width: 700px;
        }
        a {
            color: cadetblue; font-size: 2em; text-decoration: none;
        }
        a:hover, a:focus {
            text-shadow: 2px 2px 2px cadetblue;
        }
        .gallery {
            display: flex; justify-content: space-around; align-items: center;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <a href="gallery.php?image=<?=($image - 1)?>">&#9668; Назад</a>
            <img src="assets/images/arrays/<?=$image?>.png" alt="Audi">
        <a href="gallery.php?image=<?=($image + 1)?>">Вперед &#9658;</a>
    </div>
</body>
</html>
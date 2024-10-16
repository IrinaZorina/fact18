<?php
include 'header.php';

print_r($_GET);
echo  "<br>";

//$image = isset($_GET['image']) ? $_GET['image'] : 1;
//echo  $image;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <br>
  <form action="" method="get" >
    Текстовое поле     <input type="text" name="text">
    Многострочное поле <textarea name="textarea"></textarea>
  <br>
    <input type="checkbox" name= "animal[]" value= "Крокодил"  >Крокодил
    <input type="checkbox" name= "animal[]" value= "Годзилла"  >Годзилла
    
    <input type="radio"name="RT">Сникерс
    <input type="radio"name="RT">Твикс
    
  <br>
    <button type="submit">Отправить</button>
  </form>
  <br>
     Слайд 15 Задание 1
  <br><br>
  <div class="links22"><a href="/2.php">Перейти к Заданию 2</a></div>
</body>
</html>





















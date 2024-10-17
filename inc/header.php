<?php
$time = date("H");
if ($time < 20 and $time > 8) {
    $vremya = "../assets/css/ytro.css";
} 
else {
    $vremya = "../assets/css/nochi.css";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="php, html, css, bitrix" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $vremya?>"/>
  </head>

  <body>
    <header>
            <nav class="menu">
                    <ul class="navigatia">
                        <li class="active-link"><a href="../index.php">Главная страница</a></li>
                        <li class="Chikl"><a href="inc/cycles.php">Циклы</a></li>
                        <li class="Massiv"><a href="#">Массивы</a></li>
                        <li class="Stroki"><a href="#">Строки</a></li>
                        <li class="Function"><a href="#">Функции</a></li>
                        <li class="GET_POST"><a href="#">GET и POST</a></li>
                    </ul>
                    <ul class="icons">
                        <li class="seti"><a href="https://vk.com/kot_barry"><img src="../assets/image/vk.png" height="35px" width="35px"></a></li>
                        <li class="seti"><a href="#"><img src="../assets/image/inst.png" height="35px" width="35px"></a></li>
                        <li class="seti"><a href="https://t.me/kotbarry"><img src="../assets/image/telega.png" height="35px" width="35px"></a></li>
                    </ul>
            </nav>
    </header>
  </body>

  </html>
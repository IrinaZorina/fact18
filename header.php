<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="php, html, css, bitrix">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
    $time = date("G");
    if($time < 21 and $time > 8){
    $backColor = 'day';
    }
    else{
    $backColor = 'night';
    }
    ?>
</head>


<body class="<?php echo $backColor; ?>">
    <header>
        <nav>
            <div class="navbar1">
                <ul>
                    <li><a href="index.php"> О компании</a> </li>
                    <li><a href="cycles.php">Циклы</a> </li>
                    <li><a href="arrays.php">Массивы</a> </li>
                    <li><a href="string.php">Строки</a> </li>
                    <li><a href="functions.php">Функции</a> </li>
                    <li><a href="getpost.php">Get и Post</a> </li>
                    <li><a href="cookiesession.php">COOKIE и SESSION</a> </li>
                </ul>
                <ul>
                    <li><a href="#">VK</a> </li>
                    <li><a href="#">Google</a> </li>
                    <li><a href="#">Twitter</a> </li>
                    <li><a href="#">Telegram</a> </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
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
                    <a href="index.php"> О компании</a>
                    <a href="cycles.php">Циклы</a>
                    <a href="arrays.php">Массивы</a>
                    <a href="string.php">Строки</a>
                    <a href="functions.php">Функции</a>
                    <a href="getpost.php">Get и Post</a>
                    <a href="cookiesession.php">COOKIE и SESSION</a>
                </ul>
                <ul>
                    <a href="#">VK</a>
                    <a href="#">Google</a>
                    <a href="#">Twitter</a>
                    <a href="#">Telegram</a> 
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
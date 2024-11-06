<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form class="authBox" action="/aboutReg.php" method="post" >
    <label>Логин</label>
    <input class="inputBlock" type="text" name="login">
    <label>Пароль</label>
    <input class="inputBlock" type="password" name="password">
    <label>Повторите пароль</label>
    <input class="inputBlock" type="password" name="repPassword">
    <input class="buttom" type="submit">
</form>

<p>Перейти на страницу <a href="index.php">входа</a></p>

</body>
</html>

<?php
$login = isset($_POST['login']) ? $_POST['login'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$lastVisit = date('Y-m-d H:i:s');
setcookie('login', $login, time()+3600);
setcookie('password', $password, time()+3600);
setcookie('lastVisit', $lastVisit, time()+3600);
if (isset($_COOKIE['login']) && $_COOKIE['login'] === $login){
    if (isset($_COOKIE['counter'])){
        $counter = $_COOKIE['counter'] + 1;
    }
    else{
        $counter = 1;
    }
}
else{
    $counter = 1;
}

setcookie('counter', $counter, time()+3600);
unset($_COOKIE['name']);
print_r($_COOKIE);
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
<h1>Hello, <?= isset($_COOKIE['login']) ? $_COOKIE['login']: "user"; ?>.
    Время вашего последнего визита <?= isset($_COOKIE['lastVisit']) ? $_COOKIE['lastVisit']: "time"; ?>
    Вы посетили страницу <?= isset($_COOKIE['counter']) ? $_COOKIE['counter'] : "1"; ?> раз.
</h1>
<form action="" method="post">
    <input type="text" name="login" placeholder="login"><br>
    <input type="text" name="password" placeholder="password"><br>
    <input type="submit">
</form>
</body>
</html>
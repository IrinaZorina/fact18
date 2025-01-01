<?php
session_start();

$BDFile = 'users.txt';
$authErr = $regErr = '';

if (!file_exists($BDFile)) {
    file_put_contents($BDFile, '');
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $users = file($BDFile, FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($fileUsername, $fileHashPassword) = explode(':', $user);

        if ($fileUsername === $username && password_verify($password, $fileHashPassword)) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        }
    }
    $authErr = "Неверный логин или пароль!";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="assets/form_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Lines</title>
</head>
<body>
<form method="post">
    <h1>Авторизация</h1>
    <input type="text" name="username" placeholder="Логин" class="form-control" required>
    <input type="password" name="password" placeholder="Пароль" class="form-control" required>
    <button type="submit" name="login" class="btn btn-primary">Войти</button>
</form>
<p><?= $authErr; ?></p>
<p>Нет аккаунта? <a href="registration.php">Зарегистрироваться</a></p>
</body>
</html>

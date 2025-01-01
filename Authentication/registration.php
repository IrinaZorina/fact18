<?php
session_start();

$BDFile = 'users.txt';
$authErr = $regErr = '';

if (!file_exists($BDFile)){
    file_put_contents($BDFile, '');
}
//Регистрация
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = trim($_POST['new_username']);
    $password = trim($_POST['new_password']);

    $users = file($BDFile, FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($fileUsername,) = explode(':', $user);
        if ($fileUsername === $username) {
            $regErr = "Пользователь с таким логином уже существует!";
            break;
        }
    }
    if (empty($regErr)){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        file_put_contents($BDFile, "$username:$hashedPassword\n", FILE_APPEND);
        header("Location: authorization.php");
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet", href="assets/form_style.css">
    <title>Регестрация</title>
</head>
<body>

<form method="post">
    <h1>Регистрация</h1><br>
    <input type="text" name="new_username" placeholder="Логин" required>
    <input type="password" name="new_password" placeholder="Пароль" required>
    <button type="submit" name="register">Зарегистрироваться</button>
</form>
<p><?= $regErr; ?></p>
</body>
</html>

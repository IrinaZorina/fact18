<?php
$db = require_once __DIR__ . '/db/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
    if ($db->query($sql) == TRUE) {
        echo "Пользователь {$login} добавлен!";
    } else {
        echo "Ошибка: " . $db->error;
    }

    $db->close();
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление нового пользователя в Базу данных</title>
</head>
<body>
    <form method="post">
        <div>
            <label>Логин:
                <input type="text" name="login">
            </label>
        </div>
        <div>
            <label>Пароль:
                <input type="password" name="password">
            </label>
        </div>
        <div>
            <input type="submit" value="Добавить">
        </div>
    </form>
</body>
</html>
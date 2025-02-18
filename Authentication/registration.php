<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$username = "fact18";
$password = "fact18";
$dbname = "MySite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$regErr = "";

// Проверка, была ли форма отправлена
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // Проверка на существование пользователя с таким же логином
    $checkUserQuery = "SELECT * FROM users WHERE login=?";
    $stmt = $conn->prepare($checkUserQuery);
    $stmt->bind_param("s", $new_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $regErr = "Пользователь с таким логином уже существует.";
    } else {
        // Хэширование пароля
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Вставка нового пользователя в базу данных
        $insertQuery = "INSERT INTO users (login, password) VALUES (?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ss", $new_username, $hashed_password);

        if ($stmt->execute()) {
            echo "Регистрация прошла успешно. Можете войти.";
        } else {
            $regErr = "Ошибка при регистрации, попробуйте снова.";
        }
    }

    $stmt->close();
}

$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/form_style.css">
    <title>Registration</title>
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

<?php
session_start();

// Конфигурация базы данных
$servername = "localhost";
$username = "fact18";
$password = "fact18";
$dbname = "MySite";

// Создание подключения
// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$authErr = "";

// Проверка, была ли форма отправлена
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Подготовка SQL-запроса
    $checkUserQuery = "SELECT * FROM users WHERE login=?";
    if ($stmt = $conn->prepare($checkUserQuery)) {
        // Привязка параметров
        $stmt->bind_param("s", $username);

        // Выполнение запроса
        $stmt->execute();

        // Получение результата
        $result = $stmt->get_result();

        // Проверка, найден ли пользователь
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Проверка пароля
            if (password_verify($password, $user['password'])) {
                // Пароль верный. Начинаем сессию и перенаправляем пользователя
                $_SESSION['username'] = $user['login']; // Хранение логина в сессии
                header("Location: welcome.php"); // Перенаправление на страницу приветствия
                exit();
            }
        }

        // Если пользователь не найден или пароль неверный
        $authErr = "Неверный логин или пароль!";

        // Закрываем подготовленный запрос
        $stmt->close();
    } else {
        // Здесь обрабатываем ошибку при подготовке запроса
        $authErr = "Ошибка в запросе к базе данных.";
    }
}

// Закрываем соединение
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

    <title>Authorization</title>
</head>
<section>
    <a href="../Fact_and_bitrix/fact.php" class="page_fact">
        <div>Факт</div>
    </a>
    <a href="../Fact_and_bitrix/bitrix.php" class="page_bitrix">
        <div>Битрикс</div>
    </a>
</section>
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

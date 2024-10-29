<?php
include 'header.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$hostname = "MySQL-8.2";
$username = 'Anton';
$password = 'Anton';
$dbname = 'Auth';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        $color = $_POST['color'] ?? '';

        // для проверки
        //echo "Логин: $login <br>";
        //echo "Пароль: $password <br>";

        // Подготовленный запрос
        $stmt = mysqli_prepare($conn, "SELECT * FROM Auth WHERE login = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, 'ss', $login, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // Проверка ошибок
        if (!$result) {
            echo "Ошибка выполнения запроса: " . mysqli_error($conn);
        }

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['color'] = $color;
            $last_page = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'нет информации';
            $message = "<p>Добро пожаловать, $login! Ваша последняя посещенная страница: $last_page.</p>";
        } else {
            $message = "<p>Неверный логин или пароль!</p>";
        }

        mysqli_stmt_close($stmt);
    }
}

$color = $_SESSION['color'] ?? 'white';
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($color); ?>;
        }
    </style>
</head>
<body>
    <?php if (!empty($message)) echo $message; ?>
    <p><a href="Bitrix.php">Bitrix</a></p>
    <p><a href="Fact.php">Fact</a></p>
    <br><br>
    <form action="" method="post">
        <label for="Login">Имя пользователя:</label>
        <input type="text" name="login" id="Login" required>
        <br><br>
        <label for="Password">Пароль:</label>
        <input type="password" name="password" id="Password" required>
        <br><br>
        <label for="color">Выберите цвет фона:</label>
        <select name="color" id="color">
            <option value="white" <?php if ($color == 'white') echo 'selected'; ?>>Белый</option>
            <option value="red" <?php if ($color == 'red') echo 'selected'; ?>>Красный</option>
            <option value="green" <?php if ($color == 'green') echo 'selected'; ?>>Зеленый</option>
            <option value="blue" <?php if ($color == 'blue') echo 'selected'; ?>>Синий</option>
        </select>
        <br><br>
        Если ты у нас в первый раз, то <a href="register.php">зарегистрируйся</a>!
        <button type="submit">Войти</button>
    </form>
    <form action="" method="post">
        <button type="submit" name="logout">Удалить сессию</button>
    </form>
</body>
</html>

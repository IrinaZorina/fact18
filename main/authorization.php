<?php
include_once 'header.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$users = [
    'admin' => md5('admin'),
    'user' => md5('user'),
    'guest' => md5('guest')
];

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $login = $_POST['login'] ?? '';
        $password = $_POST['passwd'] ?? '';
        $color = $_POST['color'] ?? '';

        $hashed_password = md5($password);

        if (isset($users[$login]) && $users[$login] === $hashed_password) {
            $_SESSION['color'] = $color;
            $last_page = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'нет информации';
            $message = "<p>Добрый день, $login! Ваша последняя посещенная страница: $last_page.</p>";
        } else {
            $message = "<p>Неверный логин или пароль!</p>";
        }
    }
}

$color = $_SESSION['color'] ?? 'white';
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
<p><a href="bitrix.php">Bitrix</a></p>
<p><a href="Fact.php">Fact</a></p>
<br><br>
<form action="" method="post">
    <label for="login">Имя пользователя:</label>
    <select name="login" id="login" required>
        <option value="">Выбери пользователя</option>
        <?php
        foreach ($users as $user => $pass) {
            echo "<option value=\"$user\">$user</option>";
        }
        ?>
    </select>
    <br><br>
    <label for="passwd">Пароль:</label>
    <input type="password" name="passwd" id="passwd" required>
    <br><br>
    <label for="color">Выберите цвет фона:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($color == 'white') echo 'selected'; ?>>Белый</option>
        <option value="red" <?php if ($color == 'red') echo 'selected'; ?>>Красный</option>
        <option value="green" <?php if ($color == 'green') echo 'selected'; ?>>Зеленый</option>
        <option value="purple" <?php if ($color == 'purple') echo 'selected'; ?>>Фиолетовый</option>
    </select>
    <br><br>
    <button type="submit">Войти</button>
    <br><br>
</form>
<form action="" method="post">
    <button type="submit" name="logout">Удалить сессию</button>
</form>
<?php
include_once 'footer.php';
?>
</body>
</html>
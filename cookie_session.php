<?php
  include 'header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    
    $login = htmlspecialchars(trim($_POST['login']));
    
    setcookie('login', $login, time() + 3600, "/");
    setcookie('last_visit', date("Y-m-d H:i:s"), time() + 3600, "/");
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$storedLogin = isset($_COOKIE['login']) ? htmlspecialchars($_COOKIE['login']) : null;
$lastVisit = isset($_COOKIE['last_visit']) ? htmlspecialchars($_COOKIE['last_visit']) : null;

if (!$storedLogin) {
    
    echo '
    <h2>Вход</h2>
    <form method="post" action="">
        <label for="login">Имя пользователя:</label>
        <input type="text" id="login" name="login" required>
        <input type="submit" value="Войти">
    </form>
    ';
} else {
    echo "<p>Добро пожаловать, <strong>{$storedLogin}</strong>!</p>";
    if ($lastVisit) {
        echo "<p>Последний визит: {$lastVisit}</p>";
    }
}

echo '<p><a href="cookie_session2.php">Перейти к заданию 3</a></p>';



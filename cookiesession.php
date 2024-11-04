<?php require_once 'header.php'?>
Задания COOKIES
<br>
Задание 1.
Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User". После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки)
<br>
<?php
setcookie('login', 'admin');
setcookie('password', 'admin');
echo 'Hello' . ' ' . $_COOKIE['login'];
?>
<br>
Задание 2-3.
Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $login = htmlspecialchars(trim($_POST['login']));
    setcookie('login', $login, time() + 3600, "/");
    setcookie('lastVisit', date("Y-m-d H:i:s"), time() + 3600, "/");

    header("location" . $_SERVER['PHP_SELF']);
}
$name = isset($_COOKIE['login']) ? htmlspecialchars($_COOKIE['login']) : null;
$lastVisit = isset($_COOKIE['lastVisit']) ? htmlspecialchars($_COOKIE['lastVisit']) : null;

if (!$name) {
    echo '<h2>Прошу ввести ваш логин</h2> <form method="post" action="">
         <label for="login">Ваш логин :</label>
         <input type="text" id="login" name="login" required>
         <input type="submit">
         </form>';
}
else
{
    echo "<p> Добрый день, {$name} </p>";
    if ($lastVisit) {
        echo "Последнее посещение: {$lastVisit}";
    }
}
if (isset($_COOKIE['countVisit'])) {
    $countVisit = $_COOKIE['countVisit'] + 1;
}
else {
    $countVisit = 1;
}
echo "<br>";
setcookie('countVisit', $countVisit, time() + 3600 * 24 * 30, "/");
echo "Вы пришли к нам на сайт $countVisit раз.";
?>
<br>
Задания SESSIONS
<br>
1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!".
<br>
<h2>Прошу вести ваш логин</h2>
<form method="post" action="">
    <label for="login">Ваш логин :</label>
    <input type="text" id="login" name="login" required>
    <input type="submit">
</form>'
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['timeVisit'])) {
    $_SESSION['timeVisit'] = date("Y-m-d H:i:s");
}
else {
    echo "Дата и время последнего посещения : " . $_SESSION['timeVisit'];
    $_SESSION['timeVisit'] = date("Y-m-d H:i:s");
}
echo "<br>";
if (!isset($_SESSION['lastTimeVisit'])) {
    $_SESSION['lastTimeVisit'] = time();
}
else {
    $lastTimeVisit = time() - $_SESSION['lastTimeVisit'];
    echo "Вы зашли точно " . $lastTimeVisit . " секунд назад";
}
?>
<br>
<?php require_once 'footer.php'?>

<?php
include "header.php";

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

} else {
    echo "<p> Добрый день, {$name} </p>";
    if ($lastVisit) {
        echo "Последнее посещение: {$lastVisit}";
    }
}
if (isset($_COOKIE['countVisit'])) {
    $countVisit = $_COOKIE['countVisit'] + 1;
} else {
    $countVisit = 1;
}
echo "<br>";
setcookie('countVisit', $countVisit, time() + 3600 * 24 * 30, "/");
echo "Вы пришли к нам на сайт $countVisit раз.";



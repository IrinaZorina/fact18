<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "auth");
$login = $_POST['login'];
$password = $_POST['password'];
$md5_password = md5($password);
$query = mysqli_query($db, "SELECT * FROM `users` WHERE `name`='{$login}' AND `password`='{$md5_password}'");
if (mysqli_num_rows($query) == 1) {
    $_SESSION['user'] = $login;
    header("Location: /main.php");
} else {
    echo("Ошибка: Логин или пароль введены неправильно.");
}
?>
<form>
    Попробовать сначала <a href="index.php"> Попробовать</a>
</form>
<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "auth");
$login = $_POST['login'];
$password = $_POST['password'];
$md5_password = md5($password);
$query = mysqli_query($db, "SELECT * FROM `users` WHERE `name`='{$login}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['nick' => $login];
    mysqli_query($db, "INSERT INTO `users` (`name`, `password`) VALUES ('{$login}', '{$md5_password}')");
    header("Location: /index.php");
} else {
    echo("Ошибка: Данный логин занят другим пользователем.");
    

}
?>
<form>
    Попробовать сначала <a href="register.php"> Попробовать</a>
</form>

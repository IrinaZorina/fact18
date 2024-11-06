


<?php
session_start();
$database = mysqli_connect("localhost", "root", "", 'users');
$login = $_POST['login'];
$password = $_POST['password'];
$passwordhash = md5($password);
$querry = mysqli_query($database,"SELECT * FROM `person` WHERE login='{$login}'");
if(mysqli_num_rows($querry)==0){
    $_SESSION['username'] = $login;
    $_SESSION['password'] = $passwordhash;
    mysqli_query($database, "INSERT INTO `person`(`login`, `password`) VALUES('{$login}','{$passwordhash}')");
    header("location:authorization.php");
}
else{
    echo 'Логин занят';
}
?>
<a href="registration.php">Регистрация</a>
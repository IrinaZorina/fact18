




<?php
$database = mysqli_connect("localhost", "root", "", 'users');
$login = $_POST['login'];
$password = $_POST['password'];
$passwordhash = md5($password);
$querry = mysqli_query($database,"SELECT * FROM `person` WHERE login='{$login}' AND password='{$passwordhash}'");
if(mysqli_num_rows($querry)==1){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $passwordhash;
    header('location: ../index.php');
}
else{
    echo 'Неправильный логин или пароль';
}
?>


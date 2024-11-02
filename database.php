<?php
session_start();

$hostname = "localhost";
$username = "s873217_NewVyacheslavdatabase";
$password = 'Qwerty1!';
$dbname = 's873217_NewVyacheslavdatabase';

$connect = mysqli_connect($hostname, $username, $password, $dbname);

// В таблице Passwords хранятся логины и пароли пользователя
// Создал там 2 пользователей admin и user
$queryLoginPassword = mysqli_query($connect, "SELECT * FROM Passwords");
$arrOfLoginsAndPasswords = mysqli_fetch_all($queryLoginPassword, MYSQLI_ASSOC);
//Проверял как выводятся полученные данные
/*
print_r($arrOfLoginsAndPasswords);
echo '<br><br><br><br>';
echo $_SESSION['login'];
echo '<br><br>';
echo $_SESSION['password'];
echo '<br><br>';
echo '<br><br><br><br>';
*/
//Провереям какой логин и пароль ввел пользователь и в зависимости от этого выводим сообщение


if ($_SESSION['login'] === $arrOfLoginsAndPasswords[0]['Login'] and
    $_SESSION['password'] === $arrOfLoginsAndPasswords[0]['Password']) {

        echo'Пользователь аторизовался под admin';
}
elseif ($_SESSION['login'] === $arrOfLoginsAndPasswords[1]['Login'] and
    $_SESSION['password'] === $arrOfLoginsAndPasswords[1]['Password']) {

    echo'Пользователь аторизовался под user';
}

else {
    echo'Аторизация НЕ успешна';
}




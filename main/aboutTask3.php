<?php 
session_start();


$login = 'admin';
$password = 'admin';
$login1 = 'user';
$password1 = 'user';

$error = '';

if ($_POST['user'] == $login && ($_POST['password1'] == $password) || ($_POST['password']) == md5($login. ':' .$password)) {
	echo "Успешная авторизация";
} else if ($_POST['user'] == $login1 && ($_POST['password1'] == $password1) || ($_POST['password']) == md5($login1. ':' .$password1)) {
	echo "Успешная авторизация";
} else {
	echo "Не верный логин или пароль";
}





?>
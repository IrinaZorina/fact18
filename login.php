<?php
session_start();

$login = 'admin';
$password = md5('123456');

if ($_POST['login'] === $login && md5($_POST['password']) === $password) {
    $_SESSION['login'] = $login;
    header('location: index.php');
} else {
    header('location: index.php?page=login');
}
exit();
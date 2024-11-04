<?php
session_start();

$db = require_once __DIR__ . '/db/connect.php';

$login = $_POST['login'];

$sql = "SELECT login, password FROM users WHERE login='$login' LIMIT 1";
$result = $db->query($sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $login = $row["login"];
        $password = $row["password"];
    }
}

if (password_verify($_POST['password'], $password)) {
    $_SESSION['login'] = $login;
    header('location: index.php');
} else {
    header('location: index.php?page=login');
}

exit();
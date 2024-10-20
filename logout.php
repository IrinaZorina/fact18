<?php
session_start();

$_SESSION = [];
setcookie('visit', '', time() - 3600);
header('location: index.php');
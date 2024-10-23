<?php
session_start();
if (isset($_SESSION['login'])) {
    $visit = $_COOKIE['visit'] ?? 1;
    setcookie("visit", (int) $visit + 1);
}

// подключаем основной файл с функциями
require_once __DIR__ . '/core/functions.php';

if (!isset($_SESSION['login'])) {
    header('location: index.php?page=login');
    exit();
}

if (isset($_COOKIE['bg_color'])) {
    $bg_color = $_COOKIE['bg_color'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bg_color'])) {
    $bg_color =  $_POST['bg_color'];
    setcookie("bg_color", $bg_color);
}

include_once __DIR__ . '/common/header.php';

include_once __DIR__ . '/common/profile.php';

include_once __DIR__ . '/common/footer.php';
<?php
session_start();
if (isset($_SESSION['login'])) {
    $visit = $_COOKIE['visit'] ?? 1;
    setcookie("visit", (int) $visit + 1);
}

// подключаем основной файл с функциями
require_once __DIR__ . '/core/functions.php';

if (isset($_SESSION['login'])) {
    setcookie('last_page', 'fact', time() + (86400 * 30), "/");
} else {
    header('location: index.php?page=login');
}

include_once __DIR__ . '/common/header.php';

include_once __DIR__ . '/common/fact.php';

include_once __DIR__ . '/common/footer.php';
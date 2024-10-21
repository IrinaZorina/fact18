<?php
session_start();
if (isset($_SESSION['login'])) {
    $visit = $_COOKIE['visit'] ?? 1;
    setcookie("visit", (int) $visit + 1);
}

// подключаем основной файл с функциями
require_once __DIR__ . '/core/functions.php';

if (isset($_SESSION['login'])) {
    setcookie('last_page', 'bitrix', time() + (86400 * 30), "/");
} else {
    header('Location: index.php?page=login');
    exit();
}

include_once __DIR__ . '/common/header.php';

include_once __DIR__ . '/common/bitrix.php';

include_once __DIR__ . '/common/footer.php';
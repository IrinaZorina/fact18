<?php
session_start();

// получаем страницу из GET
if (empty($_GET['page'])) {
    $page = 'home';
} else {
    $page = $_GET['page'];
}

// подключаем основной файл с функциями
require_once __DIR__ . '/core/functions.php';

include_once __DIR__ . '/common/header.php';

switch ($page) {
    case 'home':
        include_once __DIR__ . '/common/mainpage.php';
        break;
    case 'loop':
        include_once __DIR__ . '/common/loop.php';
        break;
    case 'array':
        include_once __DIR__ . '/common/arrays.php';
        break;
    case 'mendeleev':
        include_once __DIR__ . '/common/mendeleev.php';
        break;
    case 'string':
        include_once __DIR__ . '/common/string.php';
        break;
    case 'form':
        include_once __DIR__ . '/common/form.php';
        break;
    case 'functions':
        include_once __DIR__ . '/common/functions.php';
        break;
    case 'login':
        include_once __DIR__ . '/common/login.php';
        break;
    default:
        include_once __DIR__ . '/common/mainpage.php';
}

include_once __DIR__ . '/common/footer.php';
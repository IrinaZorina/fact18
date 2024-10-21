<?php
include "header.html";
session_start();

$_SESSION['page'] = 'bitrix.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Bitrix</title>
</head>
<body>
    <h1>Страница о Bitrix</h1>
    <?php
    include "footer.html";
    ?>

<?php
session_start();

$_SESSION['last_page'] = 'fact.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Факты</title>
</head>
<body>
    <h1>Интересные факты</h1>
    <p>Здесь могут быть ваши интересные факты.</p>
    <a href="cookie_session.php">Вернуться на главную</a>
</body>
</html>
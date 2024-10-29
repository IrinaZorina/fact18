<?php
include 'header.php'; 

$hostname = "MySQL-8.2";
$username = 'Anton';
$password = 'Anton';
$dbname = 'Auth';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['Login'] ?? '';
    $password = $_POST['password'] ?? ''; 
}

if (empty($login) || empty($password)) {
    echo 'Необходимо заполнить все поля!';
} else {
 
    $insert_query = "INSERT INTO Auth (login, password) VALUES (?, ?)";
    
    $stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt, 'ss', $login, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo 'Вы зарегистрированы!';
    } else {
        echo 'Ошибка: ' . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <br><br>
    <form action="" method="post">
        <label for="Login">Имя пользователя:</label>
        <input type="text" name="Login" id="Login" required>
        <br><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Регистрация</button>
    </form>
</body>
</html>

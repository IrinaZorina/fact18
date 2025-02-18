<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['entryTime'] = time();
    header('Location: hello.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" required>
    <input type="submit">
</form>
</body>
</html>

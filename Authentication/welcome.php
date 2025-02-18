<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: authorization.php");
    exit();
}
$lastPage = isset($_SESSION['lastPage']) ? $_SESSION['lastPage'] : 'Эта информация недоступна';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}
$backgroundColor = isset($_SESSION['color']) ? $_SESSION['color'] : 'grey';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/form_style.css">
    <title>Welcome</title>
    <style>
        body {
            background: <?= htmlspecialchars($backgroundColor); ?>;
        }
    </style>
</head>
<body>
<h1>Добро пожаловать <?= htmlspecialchars($_SESSION['username']); ?>!</h1>
<p>Последняя посещенная вами страница - <?php echo $lastPage?></p>
<form action="" method="post">
    <select name="color" onchange="this.form.submit()">
        <option value="grey" <?= $backgroundColor == 'grey' ? 'selected' : '' ?>>Серый</option>
        <option value="wheat" <?= $backgroundColor == 'wheat' ? 'selected' : '' ?>>Бежевый</option>
        <option value="green" <?= $backgroundColor == 'green' ? 'selected' : '' ?>>Зеленый</option>
        <option value="blue" <?= $backgroundColor == 'blue' ? 'selected' : '' ?>>Синий</option>
        <option value="black" <?= $backgroundColor == 'black' ? 'selected' : '' ?>>Черный</option>
    </select>
</form>
<a href="../index.php">
    <div class="logout">На главную</div>
</a>
</body>
</html>

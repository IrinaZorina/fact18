<?php
session_start();
$user = $_SESSION['name'];
$entryTime = $_SESSION['entryTime'];
$seconds = time() - $entryTime;

$formatedEntryTime = date('Y/m/d H:i:s', $entryTime)

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
<h1>Привет, <?php echo $user; ?>!
     Последний раз вы заходили <?php echo $formatedEntryTime; ?>.
Ровно <?php echo $seconds; ?> секунд назад вы посещали страницу.</h1>
<a href="index.php">Назад</a>
</body>
</html>
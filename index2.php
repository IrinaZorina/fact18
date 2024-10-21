
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Привет, <?=isset($_SESSION["name"]) ?  $_SESSION["name"] : "user";?></h1>
    <h1>Последня страница посещена <?=isset($_SESSION["page"]) ?  $_SESSION["page"] : "не посещали";?></h1>

</body>
</html>
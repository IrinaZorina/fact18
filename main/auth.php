<?php

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
<br>
<div>
    
<form action="authBack.php" method="post">


    Логин : <select name="login" id="" size="3" multiple>
        <option value="admin"> admin</option>
        <option value="user"> user</option>
        <option value="guest"> guest</option>
    </select>

    Пароль : <input type="password" placeholder="Пароль"  name="password">

    <input type="submit">

</form>
</div>
</body>
</html>
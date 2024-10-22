<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    login <input type="text" name="login">
    password <input type="text" name="password">
<!--    <input type="checkbox" name="lang[]" value="php">php
    <input type="checkbox" name="lang[]" value="html">html -->
    <select name="lang[]" id="" size="4" multiple>
        <option value="php">пхп</option>
        <option value="html">хтмл</option>
    </select>


    <input type="submit">
</form>
</body>
</html>
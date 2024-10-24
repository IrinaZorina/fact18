<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="php, html, css, bitrix" />
    <title>Document</title>
    <link rel="stylesheet" href="inc/header.css"/>
    <link rel="stylesheet" href="inc/footers.css"/>
  </head>

  <body>
<div class="line1"></div>
<?php
    include 'inc/header.php';
?>
<div class="line2"></div>

<?php
function form () {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hashed_password = md5($password);  
}

?>


<?php
    include 'inc/footer.php';
?>
</body>
</html>
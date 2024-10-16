<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>


<div class="TaskCycles">


<?php
echo 'Пройдите авторизацию на сайте: ';
echo '<br>';

$adminLogin = 'Admin';
$adminPassword = 'AdminPass';
if ($_POST['login'] === $adminLogin and $_POST['password'] === $adminPassword) {


    header('Location: AssetsForTheSiteWithBlocks_DayNight/GreetingPageAfterCorrectLogPass.php');

     }
else {
    echo "<script>alert('Вы ввели неверный логин и пароль!');</script>";
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

<form action="" name="Form" method="post">

    Введите логин <input type="text" name="login" value="">
    Введите пароль <input type="text" name="password" value="">

    <input type="submit">

</form>




</body>
</html>


    <?php
    echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
    ?>
</div>




<?php

include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>



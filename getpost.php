<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>


<div class="ColoredBodyInGetPostPage">


<?php


//Принимаем из POST выбранный пользователем цвет и передаем его в переменную b
$b = '';

if ($_POST["PageColor"] == 'Red') {
    $b = "AssetsForTheSiteWithBlocks_DayNight/AdditionalCssFiles/Red.css";
}

elseif ($_POST["PageColor"] == "Blue") {
    $b = "AssetsForTheSiteWithBlocks_DayNight/AdditionalCssFiles/blue.css";
}
elseif ($_POST["PageColor"] == "Yellow") {
        $b = "AssetsForTheSiteWithBlocks_DayNight/AdditionalCssFiles/Yellow.css";
}

$ColorOfPage = $b;
//Задаем куку с цветом, который выбрал пользователь

setcookie('ColorOfPage', $ColorOfPage, time() + 3600);

//Проверяем, какой цвет выбрал пользователь, если никакой, то оставляем цвет с прошлого входа
$ColorInCookie = isset($_POST['PageColor']) ? $ColorOfPage : $_COOKIE['ColorOfPage'];

echo 'Пройдите авторизацию на сайте: ';
echo '<br>';

//Задаем значения логина и пароля для успешной авторизациии
$adminLogin = 'Admin';
$adminPassword = 'AdminPass';

//Получаем значения логина и пароля, которые ввел пользователь
//Если заданные значения совпадут с теми, что ввел пользователь,
// перенаправим его на страницу с приветствием
if ($_POST['login'] === $adminLogin and $_POST['password'] === $adminPassword) {


    header('Location: AssetsForTheSiteWithBlocks_DayNight/GreetingPageAfterCorrectLogPass.php');

     }

else {
    //Если не совпадут, сначала сделал выпадывающее меню, но оно сильно раздражает при работе с сайтом
    //Поэтому оставил просто комментарий, что пароль неверный
    /*
    echo "<script>alert('Вы ввели неверный логин и пароль!');</script>";
    */

    echo 'Вы ввели неверный пароль, попробуйте еще раз';
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
    <!-- В зависимости от выбранного цвета пользователем,
    открываем соответствующий файл css с цветом сайта.
    --!>
    <link rel="stylesheet" href="<?php echo $ColorInCookie; ?>">
</head>
<body>



<form action="" name="Form" method="post">

    Введите логин <input type="text" name="login" value="">
    Введите пароль <input type="text" name="password" value="">


    <select name="PageColor" id="PageColor" value="PageColor">

        <option name="Red" value="Red">Red</option>
        <option name="Blue" value="Blue">Blue</option>
        <option name="Yellow" value="Yellow">Yellow</option>
        <input type="submit">
    </select>

</form>



<?php

//Создаем ссылки на 2 страницы

echo '<br><br><br><br><br><br>';
echo 'Сылки на страницу bitrix.php и fact.php:';
echo '<br><br><br>';
?>
<a href="bitrix.php">Ссылка на bitrix.php </a>
<br><br>
<a href="fact.php">Ссылка на fact.php </a>

<?php
echo '<br><br><br>';
echo 'Последняя посещенная страница: ';
echo '<br><br><br>';
//Создаем сессию и записывааем в нее последнюю посещенную страницу через сессию 

session_start();
$lastPage = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'неизвестна';
echo $lastPage;

?>

</body>
</html>


    <?php
    echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
    ?>
</div>




<?php

include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>



<?php

$_POST['password'] = md5($_POST["password"]);
var_dump($_POST);
$login = $_POST['login'];

echo "<h2>Уважаемый , {$_POST['login']}</h2>";

echo "Вы успешно авторизовались!!!";

?>
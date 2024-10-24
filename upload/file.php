<?php
$login = "не определено";
$comments = "не определен";
if(isset($_POST["name"])){
  
    $login = $_POST["login"];
}
if(isset($_POST["comment"])){
  
    $comments = $_POST["comment"];
}
mail("nastya.sokol2013@yandex.ru",$login,$comments);
print_r($_POST);
?>
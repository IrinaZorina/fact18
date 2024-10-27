<?php
session_start();
include  "header.html";
$users =[
    "admin" => md5("12345"),
    "user" => md5("1256")
];
?>
<form action="" method="POST">
    <p>Логин<select name="login">
        <?php
        foreach($users as $log=> $pass) {
            echo "<option name=login value=$log>$log</option>";
        }
        ?>
    </select></p>
    <p>Пароль
        <input type="password" name="password">
    </p>
    <p><input type="submit"></p>
</form>
<?php
$login="";
$password="";
$new_url = 'index2.php';
if(isset($_POST["login"]) && isset($_POST["password"]))  {
    $login=$_POST["login"];
    setcookie("login",$login,time()+3600);
    $_SESSION["name"]=$_POST["login"];
    $password=md5($_POST["password"]);
    foreach($users as $log=> $pass) {
    if($log == $login && $pass == $password) {
        ob_start();
        header('Location: '.$new_url);
        ob_end_flush();
    }
    else {
        echo "неверный логин или пароль";
        break;
    }
}
}
?>
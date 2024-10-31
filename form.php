<?php
session_start();
include  "header.html";
?>
<div class="form">
<form action="" name ="auth" method="POST">
    <h2 class="auth">Авторизация</h2>
    <p>Логин<input type="login" name="login" required></p>
    <p>Пароль<input type="password" name="password" required></p>
    <p><input type="submit" name="auth"></p>
</form>
</div>

<div class="form">
<form action="" name="registr" method="post">
<h2 class="registr">Регистрация</h2>
<p>Логин<input type="login" name="login2" required></p>
<p>пароль<input type="password" name="password2" required></p>
<p>Повторите пароль<input type="password" name="password3" required></p>
<p><input type="submit" name="registr"></p>
</form>
</div>
<?php
$hostname="localhost";
$username="fact18";
$password="fact18";
$dbname="users";
$connect=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_set_charset($connect,"utf8");
$new_url = 'index2.php';
$select=mysqli_query($connect,"select * from users");
$arr=mysqli_fetch_all($select,MYSQLI_ASSOC);
foreach($arr as $arr2["login"]) {
    foreach($arr2 as $value) {
        echo "$value[login]<br>";
        echo "$value[password]<br>";

    }  
}
function reg($login,$password) {
    global $connect;
    global $arr;
    if(isset($_POST["login2"]) && $_POST["password2"] && $_POST["password3"]) {
        $login=$_POST["login2"];
        $password=$_POST["password2"];
        $accept=$_POST["password3"];
        foreach($arr as $arr2["login"]) {
            foreach($arr2 as $v) {
                if($v["login"]==$login) {
                    echo "такой логин уже занят";
                    break;
                }
                elseif ($password==$accept) {
                    $_SESSION["login2"]=$login;
                    $int="INSERT INTO users VALUES (null,'$login','$password')";
                    $add=mysqli_query($connect,$int);
                }
                else {
                    echo "пароли не совпадают";
                    break;
                }
                }
            }  
        }
    }
   

function auth($login,$password) {
    global $arr;
    global $new_url;
    if(isset($_POST["login"]) && $_POST["password"]) {
        $login=$_POST["login"];
        $password=$_POST["password"];
        foreach($arr as $array["login"]) {
            foreach($array as $v) {
                if($v["login"]==$login && $v["password"]==$password) {
                    $_SESSION["login"]=$v["login"];
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
    }
    }
reg('$login','$password');
auth('$password','$login');
include "footer.html";
?>




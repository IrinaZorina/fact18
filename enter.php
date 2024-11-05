
<?php include 'assets/header.php'?>
<?php
$my_log='test';
$my_pass='098f6bcd4621d373cade4e832627b4f6';
setcookie('b_color', isset($_GET['color']) ? $_GET['color'] : '', time() + 3600);
$hostname="localhost";
$username="Tatiana";
$password="Tatiana";
$dbname="registration";
$db_con=mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($db_con,"utf8");
$login1=isset($_POST['login_in'])?$_POST['login_in']: null;
$password1=isset($_POST['password_in'])?$_POST['password_in']=md5($_POST['password_in']):null;
$select=mysqli_query(($db_con),"SELECT * FROM reg
Where login='$login1' AND password='$password1'");
$arr_select=mysqli_fetch_all($select, MYSQLI_ASSOC);
//$insert=mysqli_query($db_con,"INSERT INTO reg ('id', 'login', 'password') VALUES (null, $login, $password)");
if(empty($arr_select) && $login1<>null){
    $link=null;
    $error= "логин или пароль указаны неверно";
}
else if (empty($arr_select) && $login1==null){
    $link=null;
    $error= '';
}
else{
    $link='in.php';
    //setcookie('time', date("Y-m-d H:i:s"), time() + 3600);
    // setcookie('login', isset($_POST['login_in']) ? $_POST['login_in'] : '', time() + 3600);
    setcookie('in', isset($_COOKIE['in']) ? $_COOKIE['in'] = $_COOKIE['in'] + 1 : 1, time() + 3600);
    $_SESSION['time'] = date("Y-m-d H:i:s");
    $_SESSION['login'] =isset($_POST['login_in'])?$_POST['login_in']: null;
    setcookie('b_color', isset($_GET['color']) ? $_GET['color'] : '', time() + 3600);
    $error='';
    //$arr_select[]=null;
}
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<p> <a href="fact.php"><button>переход на страницу fact.php</button></a></p>
<p> <a href="bitrix.php"><button>переход на страницу bitrix.php</button></a></p>
<h2>изменить фон сайта</h2>
<form action="" method="get">
    <p> <select name="color"></p>
    <p>  <option  value="">выбрать цвет</p>
    <p> <option value="lightsteelblue"> Светлоголубой</p>
    <p> <option value="lightpink">Светлорозовый</p>
    <p>   <option value="moccasin">Бежевый</p>
    <p>  <option  value="tan">Цвет загара</p>
    <br>
    <p> <input type="submit"></p>

</form>
<h2>Если вы уже зарегистрированы на сайте, <br>введите логин и пароль</h2>
<p> (логин: test/пароль: test)</p>

<div class="ava"> <form action="<?header('Location: ' . $link); echo $link;?>" method="post">
        <p> Логин  <input type="text" name="login_in" required></p>
        <p> Пароль <input type="password" name="password_in" required></p>
        <input type="submit">
    </form></div>
<h2><a href="reg.php"><button>регистрация</button></a></h2>

<h2><?php echo $error;?></h2>
</body>
</html>

<?php include 'assets/footer.php'?>
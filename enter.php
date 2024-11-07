
<?php include 'assets/header.php'?>
<?php
$my_log='test';
$my_pass='098f6bcd4621d373cade4e832627b4f6';
$logih_f=isset($_POST['login_in'])?$_POST['login_in']: null;
$pass=isset($_POST['password_in'])?$_POST['password_in']=md5($_POST['password_in']):null;
setcookie('b_color', isset($_GET['color']) ? $_GET['color'] : '', time() + 3600);
include 'Authorization.php';
$authorization1=new Authorization($logih_f);
//$authorization1->login_a=isset($_POST['login_in'])?$_POST['login_in']: null;
$authorization1->password_a=isset($_POST['password_in'])?$_POST['password_in']=md5($_POST['password_in']):null;
$select_new=$authorization1->logins_array();
$password=$authorization1->password($logih_f, $pass,$select_new);
//print_r($select_new);
//print_r($password);
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

<div class="ava"> <form action="<?header('Location: ' . $password[0][0]); echo $password[0][0];?>" method="post">
        <p> Логин  <input type="text" name="login_in" required></p>
        <p> Пароль <input type="password" name="password_in" required></p>
        <input type="submit">
    </form></div>
<h2><a href="reg.php"><button>регистрация</button></a></h2>

<h2><?php echo $password[0][1];?></h2>
</body>
</html>

<?php include 'assets/footer.php'?>
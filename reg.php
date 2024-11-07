<?php include 'assets/header.php' ?>
<?php
//$my_log='test';
//$my_pass='098f6bcd4621d373cade4e832627b4f6';


$arr_select[] = null;
$login_reg = isset($_POST['login_in_reg']) ? $_POST['login_in_reg'] : null;
$password_reg = isset($_POST['password_in_reg']) ? $_POST['password_in_reg'] = md5($_POST['password_in_reg']) : null;
include 'Authorization.php';
//include 'Registration.php';
$authorization2=new Authorization($login_reg);
$select_r=$authorization2->logins_array();
$reg=$authorization2->reg($login_reg, $password_reg, $select_r);
//$hostname = "localhost";
//$username = "Tatiana";
//$password = "Tatiana";
//$dbname = "registration";
//$db_con = mysqli_connect($hostname, $username, $password, $dbname);
//mysqli_set_charset($db_con, "utf8");
//$select = mysqli_query(($db_con), "SELECT * FROM reg
//Where login='$login_reg'");
//$arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
//print_r($arr_select);
//if ($arr_select == null && $login_reg <> null) {
//    $insert = mysqli_query($db_con, "INSERT INTO reg (id, login, password) VALUES (NULL, '$login_reg', '$password_reg')");
//    $text_reg = 'Регистрация прошла успешно';
//} else if ($arr_select == null && $login_reg == null) {
//    $text_reg = '';
//} else {
//    $text_reg = 'user с таким логином уже есть, выберите другой логин';
//}

//$arr_select=mysqli_fetch_all($select, MYSQLI_ASSOC);
//print_r($arr_select);
//if($login==$my_log && $password==$my_pass){
//  $link='in.php';
//setcookie('time', date("Y-m-d H:i:s"), time() + 3600);
// setcookie('login', isset($_POST['login_in']) ? $_POST['login_in'] : '', time() + 3600);
//   setcookie('in', isset($_COOKIE['in']) ? $_COOKIE['in'] = $_COOKIE['in'] + 1 : 1, time() + 3600);
//   $_SESSION['time'] = date("Y-m-d H:i:s");
//   $_SESSION['login'] = $_POST['login_in'];
//  setcookie('b_color', isset($_GET['color']) ? $_GET['color'] : '', time() + 3600);
//}
//else{
//    $link=null;//}
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

<h2>Регистрация на сайте, <br>введите логин и пароль</h2>
<p> (логин: test/пароль: test)</p>

<div class="ava">
    <form action="" method="post">
        <p> Логин <input type="text" name="login_in_reg" required></p>
        <p> Пароль <input type="password" name="password_in_reg" required></p>
        <p><input type="submit"></p>
    </form>
</div>
<h2><?php echo $reg; ?></h2>
</body>
</html>

<?php include 'assets/footer.php' ?>

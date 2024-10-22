<?php include 'assets/header.php'?>
<?php
$my_log='test';
$my_pass='098f6bcd4621d373cade4e832627b4f6';

$login=isset($_POST['login_in'])?$_POST['login_in']: null;
$password=isset($_POST['password_in'])?$_POST['password_in']=md5($_POST['password_in']):null;
print_r($_POST);
if($login==$my_log && $password==$my_pass){
    $link='in.html';
}
else{
    $link=null;
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
    <h2>Если вы уже зарегистрированы на сайте, <br>введите логин и пароль</h2>
    <div class="ava"> <form action="<?php echo $link;?>" method="post">
           <p> Логин  <input type="text" name="login_in"></p>
           <p> Пароль <input type="password" name="password_in"></p>
            <p><input type="submit"></p>
    </form></div>
    </body>
    </html>

<?php include 'assets/footer.php'?>
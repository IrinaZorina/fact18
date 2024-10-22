<?php
print_r($_POST);
echo "<br>";
$l=null;
$login=isset($_POST['login'])?$_POST['login']: null;
$password=isset($_POST['password'])?$_POST['password']=md5($_POST['password']):null;
print_r($_POST);
$_POST=null;

// логин=user пароль=user; логин=manager пароль=manager; логин=admin пароль=admin
//$form_reg=[
//    'user'=>'ee11cbb19052e40b07aac0ca060c23ee',
 //   'manager'=>'1d0258c2440a8d19e716292b231e3190',
 //   'admin'=>'21232f297a57a5a743894a0e4a801fc3'];
if ($login=='user'&& $password=='ee11cbb19052e40b07aac0ca060c23ee')
{
    $l='in.html';
}
elseif ($login=='manager'&& $password=='1d0258c2440a8d19e716292b231e3190')
{
    $l='in.html';
}
elseif ($login=='admin'&& $password=='21232f297a57a5a743894a0e4a801fc3')
{
    $l='in.html';
}
else{
    $l=null;
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
<form action="<?php echo $l;?>" method="post">
    Логин <select name="login">
        <option value="">выберите логин</option>
    <option value="user">user</option>
    <option value="manager">manager</option>
    <option value="admin">admin</option>
    </select></p>
    Пароль <input type="password" name="password"></p>
    <input type="submit"></p>
</form>
</body>
</html>

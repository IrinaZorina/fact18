
<?php
echo 'Не стал создавать кучу новых страниц, чтобы не запутаться :)
постарался сделать все задания по session на этой одной странице';


echo '<br><br><br><br><br><br>';


echo '<br><br><br>';
?>

<?php
session_start();

$UserName = isset($_POST['Name']) ? $_POST['Name']  : '';
$_SESSION['Name'] = $UserName;


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
<form action="" method="post">
    Как вас зовут? <input type="text" name='Name'>
    <input type="submit">
</form>
</body>
</html>

<?php
echo '<br><br>';
$UserGreet = isset($_POST['Name']) ? 'Hello, ' . $_SESSION['Name']  : '';
echo $UserGreet;
echo '<br><br><br><br><br><br>';
$timeOfEnter = isset($_POST['Name']) ? date("F j, Y, g:i a") : '';
echo 'Время захода на сайт: ' . $timeOfEnter;
echo '<br><br>';




$UserTime = (isset($_SESSION['visit_time'])) ?  : time();

$TimeOfUsingSite = time() - $UserTime;


echo 'Пользователь был на сайте ' . $TimeOfUsingSite . ' минут';

/*
 Чтобы удалить сессию нужно вызвать функцию. Не стал ее вызывать, чтобы ничего не слетело))
session_destroy()
*/

?>
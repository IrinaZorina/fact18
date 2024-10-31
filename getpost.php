<?php require_once 'header.php'?>
Задание 1.
Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.
<br>
<form action="" method="post">
    Текст <input type="text" name="text">
    <br>
    Многострочный текст <textarea name="btext" rows="3"></textarea>
    <br>
    Группа выключателей
    <input type="checkbox" name="flag[]" value="A">
    <input type="checkbox" name="flag[]" value="B">
    Группа переключателей
    <input type="radio" name="switch" value="A">A
    <input type="radio" name="switch" value="B">B
    <br>
    <input type="submit" value="Отправить">
</form>
<?php
print_r($_POST);
?>
<br>
Задание 2.
Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST
<br>
<form action="" method="post">
    Логин <input type="text" name="login">
    Пароль <input type="password" name="password">
    <br>
    <input type="submit" value="Отправить">
</form>
<?php
if (isset($_POST['password'])) {
    $_POST['password'] = md5($_POST['password']);
}
print_r($_POST);
?>
<br>
Задание 3.
Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
<br>
<form action="" method="post">
    Логин <input type="text" name="login">
    Пароль <input type="password" name="password">
    <br>
    <input type="submit" value="Отправить">
</form>
<?php
$login = 'aaa';
$password = 'bbb';
if($login == $_POST['login']){
    if($password == $_POST['password']){
        echo 'Доступ к секретным страницам открыт';
    }
}
?>

<?php require_once 'footer.php'?>

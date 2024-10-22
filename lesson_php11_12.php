<?php
$name1 = isset($_POST['name1']) ? $_POST['name1'] : '';
$delivery = isset($_POST['delivery']) ? $_POST['delivery'] : '';
$products = isset($_POST['products']) ? $_POST['products'] : '';
$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] = (md5($_POST['password'])) : '';
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

<h1>Слайд №15</h1>
<p>1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
    Выведите на экран значения, которые ввел/выбрал пользователь.</p>
<p>
<form name="opros" action="" method="post">
    Имя <input type="text" name="name1"><br></p>
    Устраивают ли сроки доставки<br>
    Да <input type="radio" name="delivery[]" value="Yes">
    Нет <input type="radio" name="delivery[]" value="No"><br></p>
    Какую категорию товара Вы обычно заказываете?<br>
    канцтовары <input type="checkbox" name="products[]" value="office" multiple><br>
    продукты <input type="checkbox" name="products[]" value="food" multiple><br>
    одежда <input type="checkbox" name="products[]" value="clothes" multiple><br></p>
    Отзыв о товаре<br>
    <textarea rows="5" name="comment"></textarea><br></p>
    <button style="submit">Отправить</button>
    <br>
    <?php
    echo 'Имя ' . $name1 . '<br>';
    echo 'Устраивают ли сроки доставки ';
    print_r($delivery);
    echo '<br>';
    echo 'Продукты ';
    print_r($products);
    echo '<br>';
    echo 'Отзыв ' . $comment;
    ?>
</form>
<p>2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и
    сохранить его в массив $_POST
</p>
<form name="form_reg" action="" method="post">
    Логин <input type="text" name="login"><br>
    Пароль <input type="password" name="password"><br>
    <input type="submit"><br><br>
    <?php
    echo 'Имя пользователя ' . $login;
    echo '<br>';
    echo 'Пароль ' . $password;
    ?><br>
</form>
<p>3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару
    (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается
    выбирать из списка.
</p>
<a href="lesson11_15_3.php">перейти на страницу ввода логина и пароля</a>

<p>4. Создайте форму генерации ссылки с параметром:
    <li> Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4</li>
    <li> При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер
        выбранной лабораторной работы.
    </li>

</p>
<a href="phpcourse.php">перейти на страницу c формой</a>
</body>
</html>

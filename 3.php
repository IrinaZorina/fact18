<?php
  include 'header.php'; 
  
    $users = [
        'admin' => 'admin0000',
        'Yakudza' => 'password1',
        'Bobr' => 'password2'
    ];
    
   
    $message = '';
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'] ?? '';
        $password = $_POST['passwd'] ?? '';
        
        
        if (isset($users[$login]) && $users[$login] === $password) {
            $message = "<p>Доступ к секретным страницам открыт!</p>";
        } else {
            $message = "<p>Неверный логин или пароль!</p>";
        }
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Вход</title>
    </head>
    <body>
        <?php
        if (!empty($message)) {
            echo $message;
        }
        ?>
        <br><br>
        <form action="" method="post">
            <label for="login">Имя пользователя:</label>
            <select name="login" id="login" required>
                <option value="">Выбери пользователя</option>
                <?php
                foreach ($users as $user => $pass) {
                    echo "<option value=\"$user\">$user</option>";
                }
                ?>
            </select>
            <br><br>
            <label for="passwd">Пароль:</label>
            <input type="password" name="passwd" id="passwd" required>
            <br><br>
            <button type="submit">Войти</button>
        </form>
        <br><br>
       <div class="links44"><a href="/4.php">Перейти к Заданию 4</a></div>
    </body>
    </html>

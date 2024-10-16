<?php
  include 'header.php'; 
  
    $users = [
        'admin' => 'admin0000',
        'Yakudza' => 'password1',
        'Bobr' => 'password2'
    ];
    
   
    $message = '';
    
    // Зашифрованные пароли с использованием md5
    $users = [
        'admin' => md5('admin0000'),
        'Yakudza' => md5('password1'),
        'Bobr' => md5('password2')
    ];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'] ?? '';
        $password = $_POST['passwd'] ?? '';
        
        $hashed_password = md5($password);
        
        if (isset($users[$login]) && $users[$login] === $hashed_password) {
            // Перенаправление на страницу приветствия
            header("Location: welcome.php?user=" . urlencode($login));
            exit;
        } else {
            $message = "<p>Неверный логин или пароль!</p>";
        }
    }
    if (!empty($message)) {
            echo $message;
        }
        ?>

    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Вход</title>
    </head>
    <body>
        
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
            Если ты у нас в первый раз, то <a href="register.php">зарегистрируйся</a>!
            <button type="submit">Войти</button>
        </form>
    </body>
    </html>

<?php
include 'header.php';
// Функция для обработки формы
function handleForm() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Хешируем пароль с использованием md5
        $hashedPassword = md5($password);
        
        // Сохраняем хешированный пароль в $_POST
        $_POST['password'] = $hashedPassword;
        
        return [
            'login' => $login,
            'hashedPassword' => $hashedPassword
        ];
    }
    return [];
}

// Функция для отображения результатов
function displayResults($formData) {
    if (!empty($formData)) {
        echo "<h3>Результаты:</h3>";
        echo "Логин: " . htmlspecialchars($formData['login']) . "<br>";
        echo "Хешированный пароль (md5): " . $formData['hashedPassword'] . "<br>";
        echo "<hr>";
    }
}
// Обработка формы
$formData = handleForm();

// Отображение результатов
displayResults($formData);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
</head>
<body>
  <br>
  Слайд 15 Задание 2
  <br><br>
    <form action="" method="post">
        Логин: <input type="text" name="login">
        <br><br>
        Пароль: <input type="password" name="password">
        <br><br>
        <button type="submit">Отправить</button>
    </form>
      <br><br>
    <div class="links33"><a href="/methods3.php">Перейти к Заданию 3</a></div>
</body>
</html>
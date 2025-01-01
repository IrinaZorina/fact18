<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/requests_style.css">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Requests</title>
</head>
<body>
<?php
include "../header/header.php";
?>
<main>
    <h1>GET и POST запросы</h1>
    <div class="GandP_task_1">
        <h2> Создайте форму, состоящую из текстового поля,
            многострочного поля, группы выключателей, группы переключателей.
            Выведите на экран значения, которые ввел/выбрал пользователь.</h2>
    </div>
    <div class="solution_GandP_task_1">
        <form action="" method="post">
            <label for="userName">Имя:
                <input type="text" id="userName" name="userName">
            </label>
            <br>
            <label for="comments">Комментарий:</label><br>
            <textarea id="comments" name="comments" rows="4"></textarea>
            <br>
            <fieldset class="manufacture">
                <legend>Производитель:</legend>
                <label>
                    <input type="radio" name="manufacture" value="Boeing">
                    Boeing
                </label>
                <label>
                    <input type="radio" name="manufacture" value="Lockheed">
                    Lockheed
                </label>
                <label>
                    <input type="radio" name="manufacture" value="Northrop">
                    Northrop
                </label>
            </fieldset>

            <fieldset class="country">
                <legend>Страна:</legend>
                <label>
                    <input type="checkbox" name="country[]" value="Польша">
                    Польша
                </label>
                <label>
                    <input type="checkbox" name="country[]" value="Алжир">
                    Алжир
                </label>
                <label>
                    <input type="checkbox" name="country[]" value="Бутан">
                    Бутан
                </label>
            </fieldset>

            <input type="submit"><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $userName = $_POST['userName'] ?? '';
                $comments = $_POST['comments'] ?? '';
                $manufacture = $_POST['manufacture'] ?? '';
                $countryArr = $_POST['country'] ?? [];

                echo "Имя: " . $userName . '<br>';
                echo "Комментарии: " . $comments . '<br>';
                echo "Производитель: " . $manufacture . '<br>';

                if (!empty($countryArr)){
                    echo "Страна: ";
                    $countryList = [];
                    foreach ($countryArr as $country){
                        $countryList[] = $country;
                    }
                    echo implode(", ", $countryList);
                }
                else{
                    echo "Страна: не выбрана";
                }
            }

            ?>
        </form>
    </div>
    <div class="GandP_task_2">
        <h2>Дана форма для ввода логина и пароля.
            Необходимо вывести на экран имя пользователя,
            а пароль захешировать и сохранить его в массив $_POST</h2>
    </div>
    <div class="solution_GandP_task_2">
        <form action="" method="post">
            <label for="username">Логин:</label>
            <input id="username" name="username" required>
            <br>
            <label for="password">Пароль</label>
            <input id="password" name="password" required>
            <br>
            <input type="submit">
            <br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $userName = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';

                $hashPassword = md5($password);

                $_POST['hashed_Password'] = $hashPassword;

                echo "Имя пользователя: " . $userName . '<br>';
                echo "Хешированный пароль: " . $hashPassword;
            }
            ?>
        </form>
    </div>
    <div class="GandP_task_3">
        <h2>Создать страницу для ввода имени пользователя (login) и пароля (passwd).
            Если пользователь вводит правильную пару (login/passwd),
            то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт.
            Login предлагается выбирать из списка.</h2>
    </div>
    <div class="solution_GandP_task_3">
        <?php
        $logins = array(
            "user1" => "password1",
            "user2" => "password2",
            "user3" => "password3"
        );

        $error = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"] ?? '';
            $password = $_POST["password"] ?? '';

            if (isset($logins[$username]) && $logins[$username] === $password) {
                echo "<h3>Доступ к секретным страницам открыт!</h3>";
            } else {
                $error = "Неверный логин или пароль!";
            }
        }
        ?>
        <form action="" method="post">
            <label for="username">Логин:</label>
            <select name="username" id="username">
                <?php foreach ($logins as $login => $password): ?>
                    <option value="<?php echo $login; ?>"><?php echo $login; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit">
            <br>
            <?php
            if ($error){
                echo $error;
            }
            ?>
        </form>
    </div>
    <div class="GandP_task_4">
        <h2>Создайте форму генерации ссылки с параметром:
            Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
            При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3, где 3 – это номер выбранной лабораторной работы.
        </h2>
    </div>
    <div class="solution_GandP_task_4">
        <form action="" method="post">
            <label for="lab">Выберите задание из списка:</label>
            <select id="lab" name="lab">
                <option value="1">Задание 1</option>
                <option value="2">Задание 2</option>
                <option value="3">Задание 3</option>
                <option value="4">Задание 4</option>
            </select>
            <input type="submit" value="Сгенерировать">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $labNumber = $_POST['lab'] ?? '';
            $link = "http://potysevsite/fact18/Functions/request.php?l=" . $labNumber;
            echo "Сгенерированная ссылка: " . $link;
        }

        ?>
    </div>
</main>
<?php
include "../footer/footer.php";
?>
</body>
</html>


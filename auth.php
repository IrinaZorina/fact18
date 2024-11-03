<?php

class Database {
    private $hostname = "MySQL-8.2";
    private $username = "Anton";
    private $password = "Anton";
    private $dbname = "Auth";
    private $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Ошибка подключения к базе данных: " . mysqli_connect_error());
        }
        mysqli_set_charset($this->conn, 'utf8');
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
}

class Auth {
    private $db;
    private $conn;
    public $message = '';

    public function __construct(Database $db) {
        $this->db = $db;
        $this->conn = $db->getConnection();
        $this->initSession();
    }

    private function initSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login($login, $password, $color) {
        if (empty($login) || empty($password)) {
            $this->message = 'Необходимо заполнить все поля!';
            return false;
        }

        $stmt = mysqli_prepare($this->conn, "SELECT password FROM Auth WHERE login = ?");
        mysqli_stmt_bind_param($stmt, 's', $login);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $hashedPassword = $user['password'] ?? '';

            // Проверка пароля
            if ($hashedPassword && password_verify($password, $hashedPassword)) {
                $_SESSION['color'] = $color;
                $last_page = $_SESSION['last_page'] ?? 'нет информации';
                $this->message = "<p>Добро пожаловать, $login! Ваша последняя посещенная страница: $last_page.</p>";
                mysqli_stmt_close($stmt);
                return true;
            } else {
                $this->message = "<p>Неверный пароль!</p>";
            }
        } else {
            $this->message = "<p>Пользователь с таким логином не найден!</p>";
        }

        mysqli_stmt_close($stmt);
        return false;
    }

    public function logout() {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    public function getColor() {
        return $_SESSION['color'] ?? 'white';
    }
}

// Инициализация
$db = new Database();
$auth = new Auth($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['logout'])) {
        $auth->logout();
    } else {
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        $color = $_POST['color'] ?? 'white';
        $auth->login($login, $password, $color);
    }
}

$color = $auth->getColor();
$db->closeConnection();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($color); ?>;
        }
    </style>
</head>
<body>
    <?php if (!empty($auth->message)) echo $auth->message; ?>
    <p><a href="Bitrix.php">Bitrix</a></p>
    <p><a href="Fact.php">Fact</a></p>
    <br><br>
    <form action="" method="post">
        <label for="Login">Имя пользователя:</label>
        <input type="text" name="login" id="Login" required>
        <br><br>
        <label for="Password">Пароль:</label>
        <input type="password" name="password" id="Password" required>
        <br><br>
        <label for="color">Выберите цвет фона:</label>
        <select name="color" id="color">
            <option value="white" <?php if ($color == 'white') echo 'selected'; ?>>Белый</option>
            <option value="red" <?php if ($color == 'red') echo 'selected'; ?>>Красный</option>
            <option value="green" <?php if ($color == 'green') echo 'selected'; ?>>Зеленый</option>
            <option value="blue" <?php if ($color == 'blue') echo 'selected'; ?>>Синий</option>
        </select>
        <br><br>
        Если ты у нас в первый раз, то <a href="register.php">зарегистрируйся</a>!
        <button type="submit">Войти</button>
    </form>
    <form action="" method="post">
        <button type="submit" name="logout">Удалить сессию</button>
    </form>
</body>
</html>

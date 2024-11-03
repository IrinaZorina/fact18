<?php

include 'header.php';

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

class Registration {
    private $db;
    private $conn;
    public $message = '';

    public function __construct(Database $db) {
        $this->db = $db;
        $this->conn = $db->getConnection();
    }

    public function register($login, $password) {
        if (empty($login) || empty($password)) {
            $this->message = 'Необходимо заполнить все поля!';
            return false;
        }

       $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO Auth (login, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($this->conn, $insertQuery);
        mysqli_stmt_bind_param($stmt, 'ss', $login, $hashedPassword);

        if (mysqli_stmt_execute($stmt)) {
            $this->message = 'Вы успешно зарегистрированы!';
            mysqli_stmt_close($stmt);
            return true;
        } else {
            $this->message = 'Ошибка регистрации: ' . mysqli_error($this->conn);
            mysqli_stmt_close($stmt);
            return false;
        }
    }
}

$db = new Database();
$registration = new Registration($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['Login'] ?? '';
    $password = $_POST['password'] ?? '';
    $registration->register($login, $password);
}

$db->closeConnection();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
</head>
<body>
    <?php if (!empty($registration->message)) echo $registration->message; ?>
    <br><br>
    <form action="" method="post">
        <label for="Login">Имя пользователя:</label>
        <input type="text" name="Login" id="Login" required>
        <br><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Регистрация</button>
    </form>
</body>
</html>

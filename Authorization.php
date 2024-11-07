<?php

class Authorization
{
    public $login_a;
    public $password_a;
    public $db_con;


    public function __construct($login_a)
    {
        $this->login_a = $login_a;
        $hostname = "localhost";
        $username = "Tatiana";
        $password = "Tatiana";
        $dbname = "registration";
        $this->db_con = mysqli_connect($hostname, $username, $password, $dbname);

    }

    public function logins_array()
    {

        mysqli_set_charset($this->db_con, "utf8");
        $select = mysqli_query(($this->db_con), "SELECT * FROM reg Where login='" . $this->login_a . "'");
        $arr_select = mysqli_fetch_all($select, MYSQLI_ASSOC);
        return ($arr_select);
    }

    public function password($login_a, $password_a, $arr_select)
    {
        $arr2 = [];
        if (empty($arr_select) && $login_a <> null) {
            $link = null;
            $error = "логин или пароль указаны неверно";
            $arr2[] = [$link, $error];

        } else if (empty($arr_select) && $login_a == null) {
            $link = null;
            $error = '';
            $arr2[] = [$link, $error];
        } else if (!empty($arr_select) && ($password_a == $arr_select[0]['password'])) {
            $link = 'in.php';
            setcookie('in', isset($_COOKIE['in']) ? $_COOKIE['in'] = $_COOKIE['in'] + 1 : 1, time() + 3600);
            $_SESSION['time'] = date("Y-m-d H:i:s");
            $_SESSION['login'] = isset($_POST['login_in']) ? $_POST['login_in'] : null;
            setcookie('b_color', isset($_GET['color']) ? $_GET['color'] : '', time() + 3600);
            $error = '';
            $arr2[] = [$link, $error];
        } else {
            $link = null;
            $error = "логин или пароль указаны неверно";
            $arr2[] = [$link, $error];
        }
        return $arr2;
    }
    public function reg($login_a, $password_a, $arr_select){
        $this->password_a=$password_a;

        if (empty($arr_select)  && $login_a <> null) {
            echo "INSERT INTO reg (login, password) VALUES ('".$this->login_a."','" .$this->password_a."')";
            $insert = mysqli_query(($this->db_con), "INSERT INTO reg (login, password) VALUES ('".$this->login_a."','" .$this->password_a."')");
            $text_reg = 'Регистрация прошла успешно';
        } else if ($arr_select == null && $login_a == null) {
            $text_reg = '';
        } else {
            $text_reg = 'user с таким логином уже есть, выберите другой логин';
        }
        return $text_reg;
    }
}


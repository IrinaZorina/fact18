<?php
class Auth {
   public $hostname;
   public $username;
   public $password;
   public $dbname;
   public $new_url;
   public $table;
   public function __construct($hostname,$username,$password,$dbname,$new_url,$table)
   {
    $this->hostname=$hostname;
    $this->username=$username;
    $this->password=$password;
    $this->dbname=$dbname;
    $this->new_url=$new_url;
    $this->table=$table;
   } 
   
   function connect($login,$password) {
     $connect=mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname);
     mysqli_set_charset($connect,"utf8");
     $select=mysqli_query($connect,"select * from $this->table");
     $arr=mysqli_fetch_all($select,MYSQLI_ASSOC);
     if(isset($_POST["login"]) && $_POST["password"]) {
        $login=$_POST["login"];
        $password=$_POST["password"];
        foreach($arr as $array["login"]) {
            foreach($array as $v) {
                if($v["login"]==$login && $v["password"]==$password) {
                    $_SESSION["login"]=$v["login"];
                    ob_start();
                    header('Location: '.$this->new_url);
                    ob_end_flush();
                }
                else {
                    echo "неверный логин или пароль";
                    break;
            
                }
            }  
        }
    }
    if(isset($_POST["login2"]) && $_POST["password2"] && $_POST["password3"]) {
        $login=$_POST["login2"];
        $password=$_POST["password2"];
        $accept=$_POST["password3"];
        foreach($arr as $arr2["login"]) {
            foreach($arr2 as $v) {
                if($v["login"]==$login) {
                    echo "такой логин уже занят";
                    break;
                }
                elseif ($password==$accept) {
                    $_SESSION["login2"]=$login;
                    $int="INSERT INTO users VALUES (null,'$login','$password')";
                    $add=mysqli_query($connect,$int);
                }
                else {
                    echo "пароли не совпадают";
                    break;
                }
                }
            }  
        }
   }
}
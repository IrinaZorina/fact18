<?php
$hostname="localhost";
$username="fact18";
$password="fact18";
$dbname="users";
$connect=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_set_charset($connect,"utf8");
//$query=mysqli_query($connect,"CREATE table People(id int not null Auto_Increment, name varchar (50),surname varchar(100),age int,primary key(id))");
//$query2=mysqli_query($connect,"CREATE table Hobbies(id_hobbies int not null Auto_Increment, name varchar (50),description varchar(100),primary key(id_hobbies))");
//$query3=mysqli_query($connect,"CREATE table People_Hobbies(id_record int not null Auto_Increment, id_people int not null,id_hobbies int not null,primary key(id_record),
//FOREIGN KEY (id_people) REFERENCES People(id) ON DELETE RESTRICT ON UPDATE CASCADE,
//FOREIGN KEY (id_hobbies) REFERENCES Hobbies(id_hobbies) ON DELETE RESTRICT ON UPDATE CASCADE)");
echo "таблица создана";
?>
<?php
//if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"])) {
   // $name=$_POST["name"];
    //$surname=$_POST["surname"];
    //$age=$_POST["age"];
    //$sql="INSERT INTO People VALUES (null,'$name','$surname',$age)";
    //$add=mysqli_query($connect,$sql);
//}
?>
<?php
$new_url = 'index2.php';
function reg($login,$password) {
    global $connect;
    $login=$_POST["login"];
    $password=$_POST["password"];
    $sql="INSERT INTO users VALUES (null,'$login','$password')";
    $add=mysqli_query($connect,$sql);
    $arr=mysqli_fetch_all($add,MYSQLI_ASSOC);
    
}
reg('$login','$password');
echo "<pre>";
print_r($arr);
echo "</pre>";
/*if(isset($_POST["login"]) && isset($_POST["password"]))  {
    $login=$_POST["login"];
    setcookie("login",$login,time()+3600);
    $_SESSION["name"]=$_POST["login"];
    $password=md5($_POST["password"]);
    foreach($users as $log=> $pass) {
    if() {
        ob_start();
        header('Location: '.$new_url);
        ob_end_flush();
    }
    else {
        echo "неверный логин или пароль";
        break;
    }
}
}*/
?>



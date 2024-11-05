<?php
$hostname = "localhost";
$username = "Tatiana";
$password = "Tatiana";
$dbname = "lesson";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
$query= mysqli_query($conn, "SELECT * FROM Name");
$arr= mysqli_fetch_all($query, MYSQLI_ASSOC);
foreach ($arr as $value) {
    echo $value["name"];
    echo "<br>";
}

echo '<pre>';
print_r($arr);
echo '</pre>';

//$query=mysqli_query($conn,'CREATE TABLE people_hobbies(
 //   id_record INT NOT NULL Auto_Increment,
   // id  int,
    //id_hobbies int,
  //  PRIMARY KEY (id_record),
   // ALTER TABLE `people_hobbies`, ADD FOREIGN KEY (id), ADD FOREIGN KEY (id_hobbies) ;
  //  )');
//echo "Table  created";
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
<form action="" method="post">
    <p>  Имя <input type="text" name="name"></p>
    <p>  Возраст <input type="text" name="age"></p>
    <p> <input type="submit"></p>


</form>

</body>
</html>

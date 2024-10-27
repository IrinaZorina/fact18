<?php
$hostname="localhost";
$username="fact18";
$password="fact18";
$dbname="project18";
$connect=mysqli_connect($hostname,$username,$password,$dbname);

mysqli_set_charset($connect,"utf8");
$query=mysqli_query($connect,"select * from person");

$arr2=mysqli_query($connect,"select name from person");
$arr3=mysqli_fetch_all($arr2, MYSQLI_ASSOC);
foreach($arr3 as $in => $arr) {
        foreach($arr as $key => $value) {
            echo "$value<br>";
        }
    
}


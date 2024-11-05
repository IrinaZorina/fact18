<?php
include 'People.php';

$user=new B();
$user->hello();
echo"<br>";
$user->bye();
echo"<br>";
$admin=new C();
$admin->hello();
echo"<br>";
$admin->bye();

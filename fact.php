<?php
session_start();

$_SESSION['last_page'] = 'fact.php';

echo $_SESSION['last_page'];

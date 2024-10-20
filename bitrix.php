<?php
session_start();

$_SESSION['last_page'] = 'bitrix.php';

echo $_SESSION['last_page'];
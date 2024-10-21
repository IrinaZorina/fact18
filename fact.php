<?php
session_start();

if (isset($_SESSION['login'])) {
    setcookie('last_page', 'fact', time() + (86400 * 30), "/");
}
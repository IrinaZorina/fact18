<?php

$db = new mysqli('127.127.126.26','fact18','fact18','fact18');

if ($db->connect_errno) {
    throw new RuntimeException('mysqli connection error: ' . $db->connect_error);
}

return $db;
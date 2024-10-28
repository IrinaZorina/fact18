<?php
$hostname = "MySQL-8.2";
$username = 'Anton';
$password = 'Anton';
$dbname = 'Project18';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');

$query = mysqli_query($conn, "SELECT name FROM person");

if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo $row['name'] . "<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

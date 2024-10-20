<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['visit_time'])) {
    $_SESSION['visit_time'] = date("Y-m-d H:i:s");
} else {
    echo "<p>Последнее посещение: " . $_SESSION['visit_time'] . "</p>";
    $_SESSION['visit_time'] = date("Y-m-d H:i:s");
}
echo '<p><a href="cookie_session4.php">Перейти к заданию 3</a></p>';
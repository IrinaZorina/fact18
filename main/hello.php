<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['timeVisit'])) {
    $_SESSION['timeVisit'] = date("Y-m-d H:i:s");
} else {
    echo "Дата и время последнего посещения : " . $_SESSION['timeVisit'];
    $_SESSION['timeVisit'] = date("Y-m-d H:i:s");
}
echo "<br>";

if (!isset($_SESSION['lastTimeVisit'])) {
    $_SESSION['lastTimeVisit'] = time();
} else {
    $lastTimeVisit = time() - $_SESSION['lastTimeVisit'];
    echo "Вы зашли точно " . $lastTimeVisit . " секунд назад";
}
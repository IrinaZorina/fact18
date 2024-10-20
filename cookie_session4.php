<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['access_time'])) {
        $_SESSION['access_time'] = time();
    } else {
        $elapsed = time() - $_SESSION['access_time'];
        echo "Вы зашли на сайт " . $elapsed . " секунд назад.";
    }
echo '<p><a href="cookie_session.php">Перейти на первую страницу</a></p>';
<?php
if (isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}
setcookie('visit_count', $visit_count, time() + 3600 * 24 * 30, "/"); // 30 days
echo "Вы посетили наш сайт $visit_count раз!";

echo '<p><a href="cookie_session3.php">Перейти к заданию 2</a></p>';
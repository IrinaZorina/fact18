<?php
include_once 'incfunctions.php';
?>
<footer class="foot">
    <div>© 2024 Ситников</div>
    <ul>
        <a href="#">VK</a>
        <a href="#">Google</a>
        <a href="#">Twitter</a>
        <a href="#">Telegram</a>
    </ul>
    <div>Разница между текущей датой и датой рождения в днях <?=getDatesDiff('30.06.2000')?> </div>
</footer>
<?php

/*if (str_ends_with($_SERVER['DOCUMENT_URI'], 'index.php')) {
    echo getMainPageWordsCount();
}
*/?>

</body>
</html>

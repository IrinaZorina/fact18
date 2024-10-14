<footer class="foot">
    <div>© 2024 Лугвин</div>
    <div>Разница между текущей датой и датой рождения в днях <?=getDatesDiff('19.06.1994')?> </div>
</footer>
<?php
if (str_ends_with($_SERVER['DOCUMENT_URI'], 'index.php')) {
    echo getMainPageWordsCount();
}
?>
</footer>

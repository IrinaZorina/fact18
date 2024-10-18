<footer>
    <hr>
    <div> <?php
        $today = date('d.m.Y');
        $birthday = '09.10.1975';
        echo "$birthday - дата рождения";
        echo "<br>";
        echo "$today - текущее значение";
        echo "<br>";
        $d_today = date_create($today);
        $d_birthday = date_create('09.10.1975');
        $interval = date_diff($d_today, $d_birthday);
        echo $interval->format('Разница %a дней');
        ?>
    <div style="text-align: right">2024 г.</div>
</footer>
</body>
</html>


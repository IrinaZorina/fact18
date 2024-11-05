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
        echo "<br>";
        echo isset($_COOKIE['login'])?$_COOKIE['login'] .', ' :'';
        echo isset($_COOKIE['in'])?'Вы посетили наш сайт ' . $_COOKIE['in'] .' раз!':'Вы посетили наш сайт 0' .' раз!';
         echo "<br>";
       // echo isset($_COOKIE['time'])?'Время захода на сайт ' . $_COOKIE['time']: '';
        echo isset($_SESSION['time'])?'Время захода на сайт ' . $_SESSION['time']: '';
        echo "<br>";
        $time_now=date("Y-m-d H:i:s");
        $last_time=isset($_SESSION['time'])?$_SESSION['time']: '';
        if ($last_time<>null) {
            $interval=date_diff(date_create($time_now), date_create($last_time));
            $_SESSION['interval']=$interval->format('%a дней, %h часов, %i минут и %s секунд');
            echo 'С Вашего последнего посещения сайта прошло  ' . $_SESSION ['interval'];
            echo "<br>";
            $last_page=isset($_COOKIE['page']) ?$_COOKIE['page']:'Вы не заходили на страницы FACT и BITRIX';
            echo isset($_COOKIE['page'])?$last_page:'';
        }


        ?>

    <div style="text-align: right">2024 г.</div>
</footer>
</body>
</html>


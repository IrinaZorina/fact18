<footer>
    <div class="create-line1"></div>
    <div>© 2024 Лугвин</div>

    <div class="foot"> <?php

        $dayNow = strtotime('10.10.2024');
        $birthDay = strtotime('19.06.1994');
        $res4 = 0;
        $days = 0;
        echo '<br>';
        echo '<br>';

        $res4 = abs($dayNow - $birthDay) / 60 /60 /24;

        echo "разница в днях $res4"; ?></div>
  </footer>
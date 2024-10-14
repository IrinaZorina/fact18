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
        function sum_words($site_word1, $site_word2)
        {
            global $about_str;
            global $about_str2;
            $arr_word_site1 = explode(" ", $site_word1);
            $sum_word_site1 = count($arr_word_site1);
            $arr_word_site2 = explode(" ", $site_word2);
            $sum_word_site2 = count($arr_word_site2);
            $sum_word_site = $sum_word_site1 + $sum_word_site2;
            echo '<br>';
            echo 'Сумма слов =>' . $sum_word_site;
        }

        sum_words($about_str, $about_str2);
        function sum_glas_letter($site_letter1, $site_letter2)
        {
            $sum1 = 0;
            global $about_str;
            $arr_letter1 = str_split($site_letter1, 2);
               foreach ($arr_letter1 as $key => $value1) {
                switch ($value1) {
                    case 'а';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'у';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'о';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'ы';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'э';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'е';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'ё';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'и';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'ю';
                        $sum1 = $sum1 + 1;
                        break;
                    case 'я';
                        $sum1 = $sum1 + 1;
                        break;
                }

            }
            global $about_str2;
            $sum2 = 0;
            $arr_letter2 = str_split($site_letter2, 2);
            foreach ($arr_letter2 as $key2 => $value2) {
                switch ($value2) {
                    case 'а';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'у';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'о';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'ы';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'э';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'е';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'ё';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'и';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'ю';
                        $sum2 = $sum2 + 1;
                        break;
                    case 'я';
                        $sum2 = $sum2 + 1;
                        break;
                }
            }
           // echo '<br>';
           // echo $sum1;
          //  echo '<br>';
          //  echo $sum2;
            
            echo '<br>';
            echo 'Сумма гласных букв => ' . $sum=$sum1+$sum2;
        }


        sum_glas_letter($about_str, $about_str2);
        ?></div>
    <div style="text-align: right">2024 г.</div>
</footer>
</body>
</html>


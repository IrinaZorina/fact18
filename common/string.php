<section class="wrapper main_block border">
    <main>
        <h1 class="name">Домашняя работа "Строки"</h1>
        <div class="content">
            <div class="content_item">
                <p>Задача №1 слайд 22</p>
                <p>Дата строка «fact». Привести строку к виду «Fact».</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = "fact";
                    echo ucfirst($str);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 слайд 22</p>
                <p>Дана строка, в которой содержится «фамилия, имя, отчество».
                   Преобразовать строку к виду «имя, фамилия».
                   Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $name = "Иванова Регина Артуровна";
                    $arr = explode(" ", $name);
                    $name = $arr[0] . " " . $arr[1];
                    echo "Фамилия Имя: {$name}";
                    unset($name, $arr, $str);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 слайд 22</p>
                <p>Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = "Привет, мир";
                    $count = substr_count($str, "и");
                    echo "Количество символов: {$count}";
                    unset($str, $count);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №4 слайд 22</p>
                <p>Дана строка ‘html css php'.
                   Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = 'html css php';
                    $words = explode(' ', $str);

                    foreach ($words as $word) {
                        echo "<p>{$word}</p>";
                    }
                    unset($str, $words);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №5 слайд 22</p>
                <p>Дана строка. Проверьте, что она заканчивается на '.png'.
                   Если это так, выведите 'да', если не так - 'нет'..</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = "picture.png";
                    if (substr_compare($str, '.png', -4) === 0) {
                        echo 'Да<br>';
                    } else {
                        echo 'Нет<br>';
                    }
                    $str = "picture.jpg";
                    if (substr_compare($str, '.png', -4) === 0) {
                        echo 'Да<br>';
                    } else {
                        echo 'Нет<br>';
                    }
                    unset($str);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №1 слайд 23</p>
                <p>Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте
                   троеточие в конец и выведите на экран.
                   Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = 'Привет, мир!';
                    if (mb_strlen($str) > 5) {
                        $str = mb_substr($str, 0, 5) . '...';
                    }
                    echo $str;
                    unset($str);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 слайд 23</p>
                <p>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = 'abcdefghijklmnop';
                    $str = str_replace('a', '1', $str);
                    $str = str_replace('b', '2', $str);
                    $str = str_replace('c', '3', $str);
                    echo "{$str}";
                    unset($str);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 слайд 23</p>
                <p>Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = "abc abc abc";
                    $position = strrpos($str, "b");
                    echo "Позиция последней буквы 'b': {$position}";
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №4 слайд 23</p>
                <p>Дана строка 'html css php'.
                   С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $str = "html css php";
                    $words = explode(" ", $str);
                    echo '<pre>';
                    var_dump($words);
                    echo '</pre>';
                    unset($str, $words);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №5 слайд 23</p>
                <p>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015).
                   Определите количество дней между датами.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    function countDaysBetweenDates($date1, $date2) {
                        $timestamp1 = strtotime($date1);
                        $timestamp2 = strtotime($date2);
                        if ($timestamp1 === false || $timestamp2 === false) {
                            return "Ошибка: одна или обе даты указаны в неверном формате.";
                        }
                        $secondsDifference = abs($timestamp1 - $timestamp2);
                        $daysDifference = floor($secondsDifference / (60 * 60 * 24));

                        return $daysDifference;
                    }
                    $date1 = '23-12-2023';
                    $date2 = date('d-m-Y');

                    $daysBetween = countDaysBetweenDates($date1, $date2);
                    echo "Количество дней между {$date1} и {$date2}: {$daysBetween} дней.";
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 слайд 24</p>
                <p>Подсчитать количество гласных букв на вашей странице.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $content = strip_tags(file_get_contents(__DIR__ . '/mainpage.php'));
                    $content .= strip_tags(file_get_contents(__DIR__ . '/header.php'));
                    $content .= strip_tags(file_get_contents(__DIR__ . '/footer.php'));
                    function countVowels($content) {
                        $vowelsPattern = '/[аеиоуюяё]/iu';
                        preg_match_all($vowelsPattern, $content, $matches);
                        return count($matches[0]);
                    }
                    $numberOfVowels = countVowels($content);
                    echo "Количество гласных букв в строке: {$numberOfVowels}";
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 слайд 24</p>
                <p>Посчитать количество слов на вашей странице.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $content = strip_tags(file_get_contents(__DIR__ . '/mainpage.php'));
                    $content .= strip_tags(file_get_contents(__DIR__ . '/header.php'));
                    $content .= strip_tags(file_get_contents(__DIR__ . '/footer.php'));
                    $words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);
                    $wordCount = count($words);
                    echo "Количество слов: " . $wordCount;
                    ?>
                </p>
            </div>
        </div>
    </main>
</section>

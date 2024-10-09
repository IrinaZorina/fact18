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
    </main>
</section>

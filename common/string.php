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
    </main>
</section>

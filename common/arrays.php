<section class="wrapper main_block border">
    <main>
        <h1 class="name">Домашняя работа "Массивы"</h1>
        <div class="content">
            <div class="content_item">
                <p>Задача №1 (Слайд 15)</p>
                <p>Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива.
                   Запишите ее в переменную $result.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                        $arr = [50, 45, 40, 35, 30]; // исходный массив

                        // считаем сумму в цикле без тела
                        for ($i = 0, $sum = 0; $i < count($arr); $sum += $arr[$i], $i++);
                        echo "Сумма всех элементов массива равна: {$sum}";
                        unset($sum);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 (Слайд 15)</p>
                <p>Дан массив, заполненный случайными числами. Необходимо вывести массив,
                   заполненный случайными числами. После чего вывести данный массив в противоположном порядке.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                        $arr = [];
                        $n = rand(10, 15);
                        // инициализируем массив в цикле.
                        for ($i = 0; $i < $n; $arr[$i] = rand(1, 999), $i++);
                        $i = 0;
                        echo 'Выводи массив:<br>';
                        while ($i < count($arr)) {
                            echo $arr[$i] . "<br>";
                            $i++;
                        }
                        echo 'А теперь в обратном порядке:<br>';
                        $arr_count = count($arr);
                        while ($arr_count <= count($arr)) {
                            if ($arr_count <= 0) {
                                break;
                            }
                            echo $arr[--$arr_count] . "<br>";
                        }
                        unset($arr, $i, $arr_count, $n);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 (Слайд 15)</p>
                <p>Создать массив, заполненный названиями картинок, например, 1.png.
                    Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $images = [
                            'assets/images/arrays/1.png',
                            'assets/images/arrays/2.png',
                            'assets/images/arrays/3.webp',
                    ];
                    $image = rand(0, count($images) - 1);
                    ?>
                    <img src="<?=$images[$image]?>" alt="Auid">
                </p>
            </div>
        </div>
    </main>
</section>

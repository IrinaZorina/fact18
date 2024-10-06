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
        <div class="content">
            <div class="content_item">
                <p>Задача №4 (Слайд 15)</p>
                <p>Дано N действительных случайных чисел в диапазоне от -100 до 100.
                   Найти минимальное положительное число и максимальное отрицательное число.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $count = 10; // количество элементов в массиве
                    $arr = [];   // инициализируем массив
                    $i = 0;
                    // формируем масси
                    while ($i <= $count) {
                        $arr[$i] = rand(-100, 100);
                        $i++;
                    }
                    $min = 0;
                    $max = 0;
                    foreach ($arr as $item) {
                        if ($item >= 0 && $item > $max) {
                            $max = $item;
                        }
                        if ($item <= 0 && $item < $min) {
                            $min = $item;
                        }
                    }
                    echo "<p>Максимальное число в массиве: {$max}</p>";
                    echo "<p>Минимально число в массиве: {$min}</p>";
                    unset($arr, $min, $max, $i);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №5 (Слайд 15)</p>
                <p>Для группы учащихся известны годовые оценки по следующим предметам:
                   математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов.
                   Суммирование оценок по каждому предмету.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $group = [
                            'Иван' => [
                                    'Математика'  => 5,
                                    'Физика'      => 4,
                                    'Химия'       => 3,
                                    'Информатика' => 2,
                                ],
                            'Маша' => [
                                    'Математика'  => 2,
                                    'Физика'      => 3,
                                    'Химия'       => 4,
                                    'Информатика' => 5,
                            ],
                            'Петя' => [
                                    'Математика'  => 3,
                                    'Физика'      => 3,
                                    'Химия'       => 4,
                                    'Информатика' => 4,
                            ],
                            'Кристина' => [
                                    'Математика'  => 5,
                                    'Физика'      => 5,
                                    'Химия'       => 4,
                                    'Информатика' => 4,
                            ],
                    ];

                    $group_count = count($group);
                    $math = 0;
                    $hemical = 0;
                    $physical = 0;
                    $it = 0;
                    foreach ($group as $student) {
                        foreach ($student as $subject => $value) {
                            switch ($subject) {
                                case 'Математика':
                                    $math += $value;
                                    break;
                                case 'Физика':
                                    $physical += $value;
                                    break;
                                case 'Химия':
                                    $hemical += $value;
                                    break;
                                case 'Информатика':
                                    $it += $value;
                                    break;
                            }
                        }
                    }
                    echo 'Средняя оценка по <b>Математике:</b> ' . $math / $group_count . '<br>';
                    echo 'Средняя оценка по <b>Физике:</b> ' . $physical / $group_count . '<br>';
                    echo 'Средняя оценка по <b>Химии</b>: ' . $hemical / $group_count . '<br>';
                    echo 'Средняя оценка по <b>Информатике:</b> ' . $it / $group_count . '<br>';
                    ?>
                </p>
            </div>
        </div>
    </main>
</section>

<?php include 'assets/header.php' ?>


    <div class="title"><h1>Слайд №15</h1></div>
    <div>1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную
        $result.
    </div>
<?php
$result = 0;
$arr8 = [50, 45, 40, 35, 30];
foreach ($arr8 as $key => $value) {
    $result = $result + $value;
}
echo "<br>";
print_r($arr8);
echo "<br>";
echo ' $result =' . "$result";
echo "<br><br>";
?>
    <div>2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После
        чего вывести данный массив в противоположном порядке.
    </div>
<?php
$arr = [];
for ($i = 0; $i <= 10; $i++) {
    $arr9[] = mt_rand(1, 7);
}
echo "<br>";
var_dump($arr9);
echo "<br><br>Прямой вывод";
for ($i = 0; $i <= count($arr9) - 1; $i++) {
    echo "<br>" . "i = $i" . " => " . $arr9[$i];
}
echo "<br><br>Обратный вывод";
for ($i = count($arr9) - 1; $i >= 0; $i--) {
    echo "<br>" . "i = $i" . " => " . $arr9[$i];
}
echo "<br><br>"
?>
    <div>3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать
        название картинки из массива и выводить ее на экран.
    </div>
<?php
$arr10 = ["fox.png", "monkey.png", "donkey.png", "butterfly.jpg", "flyf.jpg"];
{
    $n = mt_rand(0, count($arr10) - 1);
}
?>
    <div><img src="../../assets/imag/<?php echo $arr10[$n] ?>" alt=""></div><br><br>
    <div>4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и
        максимальное отрицательное число.
    </div>
<?php
$N = 20;
$otr = [];
$pol = [];
$min = null;
$max = null;
for ($m = 0; $m < $N; $m++) {
    $arr11[] = mt_rand(-100, 100);
}
foreach ($arr11 as $value) {
    if ($value >= 0) {
        $pol[] = $value;
    } else {
        $otr[] = $value;
    }
}
foreach ($pol as $value) {
    if (empty($min)) {
        $min = $value;

    } elseif ($value < $min) {
        $min = $value;

    }
}

foreach ($otr as $value) {
    if (empty($max)) {
        $max = $value;

    } elseif ($value > $max) {
        $max = $value;

    }
}
echo "<br><br>";
print_r($arr11);
echo "<br><br>";
//print_r($otr);
//echo "<br><br>";
//print_r($pol);
//echo "<br><br>";
if (empty($min)) {
    echo "В массиве нет положительных чисел";
    echo "<br>";
} else {
    echo "Минимальное положительное число $min";
    echo "<br>";
}
if (empty($max)) {
    echo "В массиве нет отрицательных чисел";
    echo "<br>";
} else {
    echo "Максимальное отрицательное число $max";
}

?>
    <div class="title"><h1>Слайд №16</h1></div>
    <div>5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика.
        Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
    </div>
<?php
$sum_mat = 0;
$sum_fiz = 0;
$sum_him = 0;
$sum_inf = 0;
$class = [
    'Белозерцева Ася' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Брусенцова Алёна' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Драник Злата' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Иванова Алиса' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Иванова Василиса' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Истомин Евгений' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Коновалов Лев' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Королёва Полина' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Пех Кира' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
    'Попова Валентина' =>
        [
            'математика' => 5,
            'физика' => 4,
            'химия' => 3,
            'информатика' => 2
        ],
];
echo '<pre>';
print_r($class);
echo "<br>";
echo '</pre>';
$count = count($class);
echo " Группа учащихся из $count человек";
foreach ($class as $key => $value) {
    foreach ($value as $key2 => $value2) {
        if ($key2 == 'математика') {
            $sum_mat = $sum_mat + $value2;
        } elseif ($key2 == 'физика') {
            $sum_fiz = $sum_fiz + $value2;
        } elseif ($key2 == 'химия') {
            $sum_him = $sum_him + $value2;
        } elseif ($key2 == 'информатика') {
            $sum_inf = $sum_inf + $value2;
        }
    }
}
$mat = $sum_mat / $count;
$fiz = $sum_fiz / $count;
$him = $sum_him / $count;
$inf = $sum_inf / $count;
echo "<br>";
echo "Сумма оценок по математике $sum_mat";
echo "<br>";
echo "Сумма оценок по физике $sum_fiz";
echo "<br>";
echo "Сумма оценок по химии $sum_him";
echo "<br>";
echo "Сумма оценок по информатике $sum_inf";
echo "<br><br>";
echo "Средняя в группе оценка по математике $mat";
echo "<br>";
echo "Средняя в группе оценка по физике $fiz";
echo "<br>";
echo "Средняя в группе оценка по химии $him";
echo "<br>";
echo "Средняя в группе оценка по информатике $inf";
echo "<br><br>";
?>
    <div>6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка,
        Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
    </div>
<?php
$new = [];

$month = null;
$island = [
    'Куба' => [
        'янв' => 25,
        'фев' => 26,
        'мар' => 27,
        'апр' => 28,
        'май' => 29,
        'июн' => 30,
        'июл' => 30,
        'авг' => 31,
        'сен' => 30,
        'окт' => 28,
        'ноя' => 26,
        'дек' => 26
    ],
    'Тринидад' => [
        'янв' => 22,
        'фев' => 22,
        'мар' => 23,
        'апр' => 25,
        'май' => 26,
        'июн' => 27,
        'июл' => 28,
        'авг' => 27,
        'сен' => 27,
        'окт' => 26,
        'ноя' => 24,
        'дек' => 23
    ],
    'Ямайка' => [
        'янв' => 25,
        'фев' => 26,
        'мар' => 26,
        'апр' => 27,
        'май' => 27,
        'июн' => 28,
        'июл' => 28,
        'авг' => 29,
        'сен' => 28,
        'окт' => 28,
        'ноя' => 27,
        'дек' => 26
    ],
    'Гаити' => [
        'янв' => 26,
        'фев' => 27,
        'мар' => 27,
        'апр' => 28,
        'май' => 29,
        'июн' => 29,
        'июл' => 31,
        'авг' => 30,
        'сен' => 29,
        'окт' => 29,
        'ноя' => 28,
        'дек' => 27
    ]
];
echo '<pre>';
print_r($island);
echo "<br>";
echo '</pre>';
foreach ($island as $key => $value) {
    $t_max = 0;
    foreach ($value as $key_m => $value_t)
        if ($t_max < $value_t) {
            $t_max = $value_t;
            $month = $key_m;
            $new [$key] = [$month => $t_max];
        }
}
echo '<pre>';
print_r($new);
echo '</pre>';
?>
    <div>7. Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент.
        Найти произведение этих элементов.
    </div>
<?php

for ($i_x = 1; $i_x <= 5; $i_x++) {
    for ($i_y = 1; $i_y <= 6; $i_y++) {
        $y = mt_rand(1, 9);
        $arr_y[$i_y] = $y;
    }
    $arr_xy[$i_x] = $arr_y;
}
echo '<pre>';
print_r($arr_xy);
echo '<pre>';
$max_value = 0;
$max_value_array = [];
for ($i = 1; $i <= 6; $i++) {
    if ($i % 2 == 0) {
        for ($j = 1; $j <= 5; $j++) {
            if ($arr_xy[$j][$i] > $max_value) {
                $max_value = $arr_xy[$j][$i];
            }
        }
        $max_value_array[$i] = $max_value;
        $max_value = 0;
    }
}
echo "Максимальные значения четных столбцов:";
echo "<br>";
print_r($max_value_array);
$max_value = 1;
foreach ($max_value_array as $key_xy11 => $value_xy11) {
    $max_value = $max_value * $value_xy11;
}

echo "Произведение $max_value";
?>
<?php include 'assets/footer.php'?>
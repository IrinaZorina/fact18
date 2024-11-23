<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/massiv_style.css">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Document</title>
</head>
<body>
<?php
include "../header/header.php";
?>
<main>
<h1>Массивы</h1>
    <div class="massivs_task_4">
        <h2>Дано N действительных случайных чисел в диапазоне от -100 до 100.
        Найти минимальное положительное число и максимальное отрицательное число.</h2>
    </div>
    <div class="solution_massivs_task_4">
        <?php
        $N = 10;
        $randomArray = [];
        for ($i = 0; $i < $N; $i++){
            $randomArray[] = mt_rand(-100, 100);
        }
        echo "Массив: " . implode(', ', $randomArray);

        $minPositive = 0;
        $maxNegative = 0;

        foreach ($randomArray as $value){
            if ($value > 0 && ($minPositive === 0 || $value < $minPositive)){
                $minPositive = $value;
            }
            if ($value < 0 && ($maxNegative === 0 || $value > $maxNegative)){
                $maxNegative = $value;
            }
        }

        echo '<br>';
        echo "Минимальное положительное число = " . $minPositive;
        echo '<br>';
        echo "Максимальное отрицательное число = " . $maxNegative;
        ?>
    </div>
    <div class="massivs_task_5">
        <h2>Для группы учащихся известны годовые оценки по следующим предметам:
            математика, физика, химия, информатика.
            Найти среднюю в группе оценку по каждому из предметов.
            Суммирование оценок по каждому предмету.</h2>
    </div>
    <div class="solution_massivs_task_5">
        <?php
        $grades = [
            'Понамарев' => [
                'математика' => 4,
                'физика' => 4,
                'химия' => 5,
                'информатика' => 5
            ],
            'Ковалёва' => [
                'математика' => 5,
                'физика' => 4,
                'химия' => 4,
                'информатика' => 3
            ],
            'Максимов' => [
                'математика' => 5,
                'физика' => 3,
                'химия' => 4,
                'информатика' => 5
            ],
            'Ефремова' => [
                'математика' => 3,
                'физика' => 5,
                'химия' => 5,
                'информатика' => 4
            ]
        ];
        foreach ($grades as $student => $studentGrades){
            echo "<br><b>$student:</b><br>";

            foreach ($studentGrades as $subject => $grade){
                echo "$subject - $grade<br>";
            }
        }

        $sumGrades = [
            'математика' => 0,
            'физика' => 0,
            'химия' => 0,
            'информатика' => 0
        ];

        foreach ($grades as $student => $studentGrades){
            $sumGrades['математика'] += $studentGrades['математика'];
            $sumGrades['физика'] += $studentGrades['физика'];
            $sumGrades['химия'] += $studentGrades['химия'];
            $sumGrades['информатика'] += $studentGrades['информатика'];
        }
        echo "<br>Сумма оценок по каждому предмету:";
        foreach ($sumGrades as $subject => $total){
            echo "<br>$subject: $total";
        }

        $quantityStudent = count($grades);

        $averageGrades = [];
        foreach ($sumGrades as $subject => $total){
            $averageGrades[$subject] = $total / $quantityStudent;
        }
        echo '<br>';
        echo "<br>Средняя оценка по каждому предмету:";
        foreach ($averageGrades as $subject => $average){
            echo "<br>$subject: " . round($average, 2);
        }
        ?>
    </div>
    <div class="massivs_task_6">
        <h2>Известна среднемесячная температура воздуха на следующих островах Карибского моря:
            Куба, Тринидад, Ямайка, Гаити.
            Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.</h2>
    </div>
    <div class="solution_massivs_task_6">
        <?php
        $averageMonthly = [
            'Куба' => [
                'Январь' => 22,
                'Февраль' => 26,
                'Март' => 27,
                'Апрель' => 28,
                'Май' => 30,
                'Июнь' => 30,
                'Июль' => 31,
                'Август' => 31,
                'Сентябрь' => 31,
                'Октябрь' => 29,
                'Ноябрь' => 27,
                'Декабрь' => 26
            ],
            'Тринидад' => [
                'Январь' => 30,
                'Февраль' => 29,
                'Март' => 29,
                'Апрель' => 29,
                'Май' => 28,
                'Июнь' => 28,
                'Июль' => 28,
                'Август' => 31,
                'Сентябрь' => 34,
                'Октябрь' => 34,
                'Ноябрь' => 32,
                'Декабрь' => 31
            ],
            'Ямайка' => [
                'Январь' => 27,
                'Февраль' => 27,
                'Март' => 27,
                'Апрель' => 28,
                'Май' => 29,
                'Июнь' => 29,
                'Июль' => 30,
                'Август' => 30,
                'Сентябрь' => 30,
                'Октябрь' => 31,
                'Ноябрь' => 31,
                'Декабрь' => 30
            ],
            'Гаити' => [
                'Январь' => 29,
                'Февраль' => 29,
                'Март' => 30,
                'Апрель' => 30,
                'Май' => 30,
                'Июнь' => 31,
                'Июль' => 32,
                'Август' => 32,
                'Сентябрь' => 31,
                'Октябрь' => 31,
                'Ноябрь' => 30,
                'Декабрь' => 29
            ]
        ];
        foreach ($averageMonthly as $island => $average){
            echo "<br><b>$island</b><br>";

            $maxTemperature = 0;

            foreach ($average as $month => $temperature){
                echo "$month: $temperature<br>";
                if ($temperature > $maxTemperature){
                    $maxTemperature = $temperature;
                }
            }
            echo "Максимальная температура на острове <b>$island</b> составляет плюс $maxTemperature <br>";
        }
        ?>
    </div>
    <div class="massivs_task_7">
        <h2>Дан двумерный массив из 5 строк и 6 столбцов.
            Определить для каждого четного столбца максимальный элемент.
            Найти произведение этих элементов.</h2>
    </div>
    <div class="solution_massivs_task_7">
        <?php
        $matrix = [
            [2, 1, 3, 5, 4, 7],
            [9, 2, 3, 4, 9, 6],
            [7, 5, 9, 2, 7, 1],
            [4, 4, 5, 7, 3, 6],
            [2, 2, 2, 3, 3, 8]
        ];
        foreach ($matrix as $row){
            foreach ($row as $value){
                echo $value . " ";
            }
            echo "<br>";
        }
        $columnCount = count($matrix[1]);

        $maxValues = [];

        for ($column = 0; $column < $columnCount; $column++){
            if ($column % 2 !== 0){
                $maxValue = 0;
                foreach ($matrix as $row){
                    if ($row[$column] > $maxValue){
                        $maxValue = $row[$column];
                    }
                }
                $maxValues[$column] = $maxValue;
            }
        }
        foreach ($maxValues as $column => $maxVal) {
            echo "<br>Максимальное значение в столбце №" . ($column + 1) . " равен $maxVal";
        }
        ?>
    </div>
</main>
<?php
include "../footer/footer.php";
?>
</body>
</html>
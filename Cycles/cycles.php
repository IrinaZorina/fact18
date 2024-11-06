
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style_cycles.css">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Cycles</title>
</head>
<body>
<?php
include "../header/header.php";
?>
<main>
    <h1>Циклы</h1>
    <div class="fractions">
        <h2>Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ...
            Какое минимальное количество элементов последовательности нужно сложить,
            чтобы сумма превысила заданное число S > 10?</h2>
        <div class="decision_fractions">
        <?php
        $s = 0;
        $a = 1;
        $count = 0;
        while ($s < 10) {
            $numerator = (3 * $a - 2);
            $denominator = $a;
            $s += $numerator / $denominator;
            $sequence[] = $numerator . '/' . $denominator;
            $a++;
            $count++;
        }
        echo 'Последовательность: ' . implode(' + ', $sequence) . "\n <br>";
        echo "Количество элементов: $count ";
        ?>
        </div>
    </div>
    <div class="task_1">
        <h2>Выведите столбец чисел от 5 до 13.</h2>
        <div class="decision_task_1">
            <?php
            $a = 4;
            while ($a++ < 13) {
                echo "$a <br>";
            }
            ?>
        </div>
    </div>
    <div class="task_2">
        <h2>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
            Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла).
            Решите задачу сначала через цикл while, а потом через цикл for.</h2>
        <div class="decision_task_2">
            <div class="while">
                <p class="cycles_name">Цикл while</p>
                <?php
                $num = 1000;
                $count = 0;

                while ($num >= 50) {
                    $num /= 2;
                    $count++;
                }
                echo "Количество итераций: $count <br>";
                echo "Результат: $num";
                ?>
            </div>
            <div class="for">
                <p class="cycles_name">Цикл for</p>
                <?php
                $num = 1000;
                $count = 0;
                for ($num = 1000; $num >= 50; $num /= 2) {
                    $count++;
                }
                echo "Количество итераций: $count <br>";
                echo "Результат: $num";
                ?>
            </div>
        </div>
    </div>
    <div class="task_3">
        <h2>Необходимо создать переменную ($i) и передавать в нее значение.
            Если в переменную положить 0,
            то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».
            Если переменная равна 1,
            то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».
            Если переменная равна 2,
            то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».
            Если переменная равна 3,
            то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</h2>
        <div class="decision_task_3">
            <?php
            $i = '';
            switch ($i) {
                case '0':
                    echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
                    break;
                case '1':
                    echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9';
                    break;
                case '2':
                    echo '0, 1, 2, 3, 4, 5, 6, 7, 8';
                    break;
                case '3':
                    echo '0, 1, 2, 3, 4, 5, 6, 7';
                    break;
                case '4':
                    echo '0, 1, 2, 3, 4, 5, 6';
                    break;
                case '5':
                    echo '0, 1, 2, 3, 4, 5';
                    break;
                case '6':
                    echo '0, 1, 2, 3, 4';
                    break;
                case '7':
                    echo '0, 1, 2, 3';
                    break;
                case '8':
                    echo '0, 1, 2';
                    break;
                case '9':
                    echo '0, 1';
                    break;
                case '10':
                    echo '0';
                    break;
                default:
                    echo 'Измените переменную $i от 0 до 10';
            }
            ?>
        </div>
    </div>
</main>
<?php
include "../footer/footer.php";
?>
</body>
</html>
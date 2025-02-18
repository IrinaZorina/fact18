<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/functions_style.css">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Functions</title>
</head>
<body>
<?php
include "../header/header.php";
?>
<main>
    <h1>Функции</h1>
    <div class="function_task_1">
        <h2> Создайте функцию,
            которая принимает одномерный массив и
            возвращает массив,заполненый случайными числами.</h2>
    </div>
    <div class="solution_function_task_1">
        <?php
        function randMass($size, $minValue, $maxValue){
            $arr = [];
            for ($i = 0; $i < $size; $i++){
                $randomValue = rand($minValue, $maxValue);
                $arr[] = $randomValue;
            }
            return $arr;
        }
        $size = 5;
        $minValue = 1;
        $maxValue = 20;
        $arr = randMass($size, $minValue, $maxValue);
        echo implode(', ', $arr);
        ?>
    </div>
    <div class="function_task_2">
        <h2> Дана строка «HTML, CSS, PHP, BITRIX».
            Написать функцию, которая определит количество слов строке.</h2>
    </div>
    <div class="solution_function_task_2">
        <?php
        function wordСounter($text){
            $textArr = explode(' ', $text);
            return count($textArr);
        }
        $text = "HTML, CSS, PHP, BITRIX";
        echo wordСounter($text);
        ?>
    </div>
    <div class="function_task_3">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX».
            Написать функцию, которая выведет в обратном порядке буквы.</h2>
    </div>
    <div class="solution_function_task_3">
        <?php
        function reversText($text){
            $revers = strrev($text);
            return $revers;
        }
        $text = "HTML, CSS, PHP, BITRIX";
        echo reversText($text);
        ?>
    </div>
    <div class="function_task_4">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX».
            Написать функцию, которая выводит на экран длину строки.</h2>
    </div>
    <div class="solution_function_task_4">
        <?php
        function lineLength($text){
            $length = mb_strlen($text);
            return $length;
        }
        $text = "HTML, CSS, PHP, BITRIX";
        echo lineLength($text);
        ?>
    </div>
    <div class="function_task_5">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX».
            Написать функцию, которая выводит каждую букву на новую строку</h2>
    </div>
    <div class="solution_function_task_5">
        <?php
        function newLine($text){
            $arrText = str_split($text);
            $columnText = implode('<br>', $arrText);
            return $columnText;
        }
        $text = "HTML, CSS, PHP, BITRIX";
        $columnText = newLine($text);
        echo $columnText;
        ?>
    </div>
    <div class="function_task_6">
        <h2>Создать функцию, которая принимает строку.
            Вернуть количество слов в строке.</h2>
    </div>
    <div class="solution_function_task_6">
        <?php
        function wordСounterTask6($text){
            $textWithoutSigns = preg_replace("/[[punct]]/", ' ', $text);
            $extraSpaces = preg_replace('/\s+/', ' ', $textWithoutSigns);
            $textArr = explode(' ', $extraSpaces);
            return count($textArr);
        }
        $text = "hello my dear friends!!!";
        echo $text;
        echo '<br>';
        echo wordСounterTask6($text);
        ?>
    </div>
    <div class="function_task_7">
        <h2>Написать функцию,
            которая рассчитывает последовательность чисел Фибоначчи.</h2>
    </div>
    <div class="solution_function_task_7">
        <?php
        function fibonachi($n)
        {
            if ($n == 0) {
                return [];
            } elseif ($n == 1) {
                return [0];
            } elseif ($n == 2) {
                return [0, 1];
            } else {
                $fibNums = fibonachi($n - 1);
                $fibNums[] = $fibNums[count($fibNums) - 1] + $fibNums[count($fibNums) - 2];
                return $fibNums;
            }
        }
        $n = 6;
        $fibSequence = fibonachi($n);
        print_r($fibSequence);
        echo '<br>';
        echo implode(' ', $fibSequence);
        ?>
    </div>
</main>
<?php
include "../footer/footer.php";
?>
</body>
</html>


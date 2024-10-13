<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>

<div class="TaskCycles">


<?php

echo 'Задача 6. Слайд 16';
echo '<br><br>';
$i = 0;
function StrI($StrIn) {
    $b = 0;
    $arrLetters = explode(' ', $StrIn);

    for ($i = 0; $i < count($arrLetters); ) {
        $i++;
    }

    echo '<br><br>';
    return $i;
}

$StrIn = 'Hello World';
echo $StrIn;
$a = strI($StrIn);
echo 'Количество слов в строке = ' . $a;

echo '<br><br>';
echo 'Задача 7. Слайд 16';
echo '<br><br>';

function fibSeq($n) {

    $arr3 = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $arr3[] = $arr3[$i - 1] + $arr3[$i - 2];
    }

    return array_slice($arr3, 0, $n);
}

$n = 10;
echo 'Количество элементов последовательности Фибоначи n = ' . $n;
echo '<br><br>';
$fibNumb= fibSeq($n);
echo 'Массив n элементов';
echo '<br><br>';
print_r($fibNumb);

echo '<br><br>';
echo 'Задача 1. Слайд 17';
echo '<br><br>';


function fillArrayWithRandomNumbers($inputArray, $min, $max) {

    $randomArray = [];

    for ($i = 0; $i < count($inputArray); $i++) {
        $randomArray[$i] = mt_rand($min, $max);
    }

    return $randomArray;
}

$inputArray = [1, 2, 3, 4, 5];
echo 'Передаем массив в функцию:';
echo '<br><br>';
print_r($inputArray);
$randomNumbersArray = fillArrayWithRandomNumbers($inputArray, 1, 20);
echo '<br><br>';
echo 'Массив на выходе с функции: ';
echo '<br><br>';
print_r($randomNumbersArray);

echo '<br><br>';
echo 'Задача 2. Слайд 17';
echo '<br><br>';


function countWordsInString($inputString) {
    $wordsArray = explode (', ', $inputString);
    return count($wordsArray);
}

$inputString = "HTML, CSS, PHP, BITRIX";
echo $inputString;
echo '<br><br>';
$wordCount = countWordsInString($inputString);
echo "Количество слов в строке: $wordCount";


echo '<br><br>';
echo 'Задача 3. Слайд 17';
echo '<br><br>';


function reverseLettersInWords($stringInRev) {
    $wordsArray = explode (', ', $stringInRev);

    foreach ($wordsArray as &$word) {
        $word = strrev($word);
    }

    return implode('', $wordsArray);
}


$stringInRev = "HTML, CSS, PHP, BITRIX";
echo $stringInRev;
echo '<br><br>';
$reversedString = reverseLettersInWords($stringInRev);
echo $reversedString;

echo '<br><br>';
echo 'Задача 4. Слайд 17';
echo '<br><br>';


function printStringLength($inputStr1) {

    $length = strlen($inputStr1);


    echo "Длина строки: $length";
}

$inputStr1 = "HTML, CSS, PHP, BITRIX";
echo $inputStr1;
echo '<br><br>';
printStringLength($inputStr1);

echo '<br><br>';
echo 'Задача 5. Слайд 17';
echo '<br><br>';


function printEachLetterOnNewLine($inputString1) {
    $newStr1 = '';
    $newArr1 = [];
    $letters = str_split($inputString1);
    print_r($letters);
    // Выводим каждый символ на новой строке
    for ($i = 0; $i < count($letters); $i++) {
        $newArr1[$i] = $letters[$i] . '<br><br>';

    }
    $newStr1 = implode($newArr1);
    return $newStr1;
}


$inputString1 = "HTML, CSS";
echo $inputString1;
echo '<br><br>';
$outputStr = printEachLetterOnNewLine($inputString1);
echo '<br><br>';
echo ($outputStr);
?>
</div>

<?php
include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>

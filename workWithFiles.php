<?php
session_start();
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>
    <div class="TaskCycles">

<?php

// Создаем переменную с названием файла
$fileHelloTxt = 'hello.txt';

// Текст, который будем записывать в файл
$content = "Hello, world! I'm Name";

// Записываем текст в файл
file_put_contents($fileHelloTxt, $content);


$directoryTest= 'test';

// Создаем папку
mkdir($directoryTest, 0777, true);


// Читаем содержимое файла в массив строк
$str = fopen('TextFileWithNames.txt', 'r');
$lines = fread($str, 100);

list($firstName, $lastName, $feedback) = explode(' ', $lines);

echo "Имя: $firstName, Фамилия: $lastName<br>";

echo '<br><br><br><br>';
echo 'Задача 4. Слайд 12';
echo '<br><br><br><br>';
//Берем содержиимое двух файлов и записываем его в массив
$contentOfTheHello = file_get_contents('hello.txt');
$contentOfTextFileWithNames = file_get_contents('TextFileWithNames.txt');
$ArrayOfWordsHello = explode(' ', $contentOfTheHello);
$ArrayOfWordsTextFileWithNames = explode(' ', $contentOfTextFileWithNames);

//Создаем новый массив из двух
$NewArray =array_merge($ArrayOfWordsHello, $ArrayOfWordsTextFileWithNames);
print_r($NewArray);
echo '<br><br><br><br>';

//Добавляем слова, которые не повторяются и есть хотя бы в 1 из файлов
$ArrayOfWordsInBothFiles =  array_unique($NewArray);
print_r($ArrayOfWordsInBothFiles);
//Кладем эти слова в новый файл
file_put_contents('newFileWithUniqueWords',$ArrayOfWordsInBothFiles);

//Ищем все слова, которые есть и в одном и другом файле
$commonWords = array_intersect($ArrayOfWordsHello, $ArrayOfWordsTextFileWithNames);

// Записываем эти слова в новый файл
file_put_contents('newFileWithCommonWords',$commonWords);
echo '<br><br><br><br><br><br><br>';
?>

</div>




<?php
include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>

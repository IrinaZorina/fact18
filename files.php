<?php

echo 'Задание 1';
echo '<br>';
echo 'Проверь файл hello.txt';
file_put_contents('hello.txt', 'Hello, world! I\'m Anton');

echo '<br><br>';
echo 'Задание 2';
echo '<br>';
if (!is_dir('test')) {
    mkdir('test');
} else {
    echo 'Директория test уже существует.';
}

echo '<br><br>';
echo 'Задание 3';
echo '<br>';
$file = fopen('contacts.txt', 'r+');
if ($file) {
    $n = fread($file, 24);
    echo $n;
    fclose($file); 
} else {
    echo 'Не удалось открыть файл contacts.txt.';
}

echo '<br><br>';
echo 'Задание 4';
echo '<br>';
$arr1 = file('hello.txt', FILE_IGNORE_NEW_LINES);
$arr2 = file('contacts.txt', FILE_IGNORE_NEW_LINES);

$common_lines = array_intersect($arr1, $arr2);

if (!empty($common_lines)) {
    file_put_contents('text3.txt', implode('', $common_lines));
    echo 'Пересечения найдены и записаны в файл text3.txt.';
} else {
    echo 'Пересечений нет.';
}

echo '<br><br>';
echo 'Задание 5';
echo '<br>';

$file1_content = file_get_contents('hello.txt');
$file2_content = file_get_contents('contacts.txt');

$sentences1 = explode('.', $file1_content);
$sentences2 = explode('.', $file2_content);

$sentences1 = array_filter(array_map('trim', $sentences1));
$sentences2 = array_filter(array_map('trim', $sentences2));

$common_sentences = array_intersect($sentences1, $sentences2);

if (!empty($common_sentences)) {
    file_put_contents('file3.txt', implode('. ', $common_sentences) . '.');
    echo 'Повторяющиеся предложения записаны в файл file3.txt.';
} else {
    echo 'Повторяющихся предложений нет.';
}

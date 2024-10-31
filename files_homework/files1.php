<?php
/*
 * Даны два файла, состоящие из предложений.
 * Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов.
 * Повторы не добавлять в третий файл.
 */

$lines1 = file(__DIR__ . '/file1.txt');
$lines2 = file(__DIR__ . '/file2.txt');


foreach ($lines1 as $line) {
    if (in_array($line, $lines2)) {
        continue;
    }
    $arr[] = $line;
}

foreach ($lines2 as $line) {
    if (in_array($line, $lines1)) {
        continue;
    }
    $arr[] = $line;
}

file_put_contents(__DIR__ . '/file3.txt', $arr);
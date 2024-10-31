<?php

/*
 * Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.
 */

$lines1 = file(__DIR__ . '/file1.txt');
$lines2 = file(__DIR__ . '/file2.txt');

foreach ($lines1 as $line) {
    if (in_array($line, $lines2)) {
        $arr[] = $line;
    }
}

file_put_contents(__DIR__ . '/file4.txt', $arr);
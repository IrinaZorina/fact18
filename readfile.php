<?php
$filename = __DIR__ . '/file.txt';
$file = fopen($filename, 'r');
if ($file) {
    while (!feof($file)) {
        $str = fread($file, 1);
        if ($str == PHP_EOL || $str == "\r") {
            continue;
        }
        $str = str_replace("H", "h", $str);
        echo $str . '<br>';
    }
} else {
    echo "Не удалось открыть файл.";
}
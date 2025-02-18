<?php
$file = fopen('text.txt', 'r');
$content = fread($file, filesize('text.txt'));
fclose($file);

$lines = explode("\n", $content);

$firstName = '';
$lastName = '';

foreach ($lines as $line) {
    $line = trim($line);
    if (strpos($line, 'Имя:') === 0){
        $firstName = substr($line, strlen('Имя:'));
    }
    elseif (strpos($line, 'Фамилия:') === 0) {
        $lastName = substr($line, strlen('Фамилия:'));
    }
}
echo "Имя: " . trim($firstName) . "<br>";
echo "Фамилия: " . trim($lastName) . "<br>";
<?php

// Функция для чтения файла и возвращения массива предложений
function getSentencesFromFile($filename) {
    $content = file_get_contents($filename);
    // Разбиваем текст на предложения. Здесь предполагается, что предложения заканчиваются точкой, восклицательным или вопросительным знаком.
    return preg_split('/(?<=[.!?])\s+/', $content);
}

// Чтение предложений из обоих файлов
$sentencesFile1 = getSentencesFromFile('file1.txt');
$sentencesFile2 = getSentencesFromFile('file2.txt');

// Приводим предложения к нижнему регистру и удаляем пробелы
$sentencesFile1 = array_map('trim', array_map('strtolower', $sentencesFile1));
$sentencesFile2 = array_map('trim', array_map('strtolower', $sentencesFile2));

// Находим повторяющиеся предложения
$repeatedSentences = array_intersect($sentencesFile1, $sentencesFile2);

// Записываем повторяющиеся предложения в третий файл
file_put_contents('repeated_sentences.txt', implode(PHP_EOL, $repeatedSentences));

echo "Повторяющиеся предложения успешно записаны в файл 'repeated_sentences.txt'.\n";
?>

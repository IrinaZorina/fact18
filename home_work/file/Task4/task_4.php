<?php
$file1 = 'file1.txt';
$file2 = 'file2.txt';
$outputFile = 'unique_sentences.txt';

function readSentencesFromFile($fileName){
    if (!file_exists($fileName)){
        return [];
    }
    $content = file_get_contents($fileName);
    return array_filter(array_map('trim', explode('.', $content)));
}
$sentences1 = readSentencesFromFile($file1);
$sentences2 = readSentencesFromFile($file2);

$uniqueInFile1 = array_diff($sentences1, $sentences2);
$uniqueInFile2 = array_diff($sentences2, $sentences1);

$uniqueSentences = array_merge($uniqueInFile1, $uniqueInFile2);

file_put_contents($outputFile, implode(".\n", $uniqueSentences) . ".");

echo "Уникальные предложения записаны в файл $outputFile";

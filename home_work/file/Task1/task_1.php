<?php
$filename = 'hello.txt';
$content = "Hello, world! I'm Name";
file_put_contents($filename, $content);

echo "Файл $filename успешно создан с содержимым: $content";
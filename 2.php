<?php
$str = file(filename: 'read.txt');
print_r($str);

$str2 = file_get_contents(filename: 'read.txt');
print_r($str2);
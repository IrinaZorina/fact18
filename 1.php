<?php
$str = fopen('read.txt', 'r'); 
while (!feof($str)) { 
    $c = fread($str, 1); 
    if (trim($c) !== '') { 
        echo $c . '<br>'; 
    }
}
fclose($str);
<?php
/*
 * Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.
 */

$feedback = file(__DIR__ . '/feedback.txt');

foreach ($feedback as $key => $value) {
    if (($key + 1) % 3 !== 0) {
        echo $value . '<br>';
    }
}
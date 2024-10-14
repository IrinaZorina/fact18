<?php include 'assets/header.php' ?>
   <div class="title"><h1>Слайд №15</h1></div>
 <div>3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
 </div>
<?php
function ten($dec)
{
 for ($dec-10; $dec <= 10000000; $dec = $dec * 10) {
  if ($dec <= 1000000) {
   echo $dec . '<br>';
  } else {
   echo 'вы достигли предела' . '<br>';
  }
 }

}
ten(10);

?>
    <div class="title"><h1>Слайд №16</h1></div>
    <div>4. Создать функцию, в которой объявляется массив и случайными элементами.</div><br>

<?php
function random_array($lang, $min, $max){
    $r_arr=[];
    for ($i=0; $i < $lang; $i++) {
         $r_arr[$i] = mt_rand($min, $max);
    }
return ($r_arr);
}

print_r(random_array(5, 0, 88))
?>
    <br><br>
    <div>5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.
        </div><br>
<?php
function medium_array($arr2){

   $sum=0;
   foreach ($arr2 as  $value) {
        $sum=$sum+$value;
    }
   print_r($arr2);
   echo "<br>";
   echo 'Cреднеарифметическое значение массива => ' .$sum/count($arr2);
}
$arr3=[5,15,10,20,30];
 medium_array ($arr3);
?>
    <br><br>
    <div>6. Создать функцию, которая принимает строку. Вернуть количество слов в строке.
    </div><br>
<?php
function sum_word($sw){
    $arr_sw=explode(' ', $sw);
    echo $sw;
    echo '<br>';
    print_r($arr_sw);
    echo '<br>';
    echo 'Количество слов в строке' . count($arr_sw);

}
sum_word('Также вы можете использовать длину строки, чтобы убедиться, что текст не превышает заданное ограничение.');
?>
    <br><br>
    <div>6. Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.
    </div><br>
<?php
function fibonachi($n)
{
 $f0=0;
 $f1=1;
 $rez_f=[0,1];
 for ($i=0; $i <= $n; $i++) {
     $fn=$f0+$f1;
     $rez_f[]=$fn;
     $f0=$f1;
     $f1=$fn;
 }
 foreach ($rez_f as  $value) {
     echo $value . ', ';
 }
}
$ch=10;
fibonachi($ch);
?>

    <div class="title"><h1>Слайд №17</h1></div>
    <div>1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
    </div>
<?php
function my_array_random($arr_in, $min, $max){
    echo "Принимает ";
    print_r($arr_in);
    echo "<br>";
    $arr_out=[];
  for ($i=0; $i < count($arr_in); $i++) {
      $arr_out[]=mt_rand($min, $max);
  }
  echo "Возвращает ";
  print_r($arr_out);
  echo "<br><br>";
}

$min=0;
$max=100;
$arr_my=[5,15,10,20,30,10,10, 1, 8, 2];
my_array_random ($arr_my, $min, $max);
?>
    <div>2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
    </div>
<?php
function sum_word2($x)
{
 $arr_word2=explode(', ', $x);

 foreach ($arr_word2 as $key_w => $value) {
     echo $value . ", ";

}
    echo '<br>';
    echo 'Количество слов в строке => ' . $key_w+1;
    echo '<br><br>';
}
sum_word2('HTML, CSS, PHP, BITRIX');
?>
    <div>3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
    </div>
<?php
function word_back($str_w)
{
    $arr_word3=str_split($str_w, 1);
   // print_r($arr_word3);
    echo '<br>';
    for ($i = count($arr_word3)-1; $i>=0; $i--) {
        echo $arr_word3[$i];
    }
    echo '<br> <br>';
}
word_back('HTML, CSS, PHP, BITRIX');
?>
<div>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
    </div>
<?php
function word_len($str_len)
{
    $len=mb_strlen($str_len);
   echo 'Длина строки => ' .$len;
    echo '<br> <br>';
}
word_len('HTML, CSS, PHP, BITRIX');
?>
    <div>5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку
    </div>
<?php
function word_str_l($str_l)
{
    $arr_letter=str_split($str_l, 1);
    print_r($arr_letter);
    echo '<br>';
    for ($i=0; $i<count($arr_letter); $i++) {
        if ($arr_letter[$i]<>' ' && $arr_letter[$i]<>',') {
            echo $arr_letter[$i] .'<br>';
        }

    }
    echo '<br>';


}
word_str_l('HTML, CSS, PHP, BITRIX');
?>

<?php include 'assets/footer.php'?>
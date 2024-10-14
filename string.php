<?php include 'assets/header.php' ?>
<div class="title"><h1>Слайд №22</h1></div>
<div>3. Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). </div>
<?php
//Слайд 22 %3
$sum_i=0;
$str="Привет, мир";
$arr_str=str_split($str,2);
foreach ($arr_str as $k=>$v){
    if($v=="и" || $v=="И"){
        $sum_i=$sum_i+1;
    }
}
echo "<br>";
echo "количество символа «и» в строке $sum_i";
echo "<br><br>";
?>

<div>4. Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
</div>
<?php
//Слайд 22 №4
$str2="html css php";
$arr_str2=explode(' ', $str2);
foreach ($arr_str2 as $k2=>$v2){
    echo "<br>";
    echo "$v2";

}
echo "<br><br>";
?>
<div>5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
</div>
<?php
//Слайд 22 №5
$str3="html_css.php";
$arr_str3=explode('.', $str3);
print_r($arr_str3);
echo "<br><br>";
if ($arr_str3[count($arr_str3)-1]=="php"){
    echo "ДА";
    echo "<br>";
}
else {
    echo "НЕТ";
}
echo "<br>";

?>
    <div class="title"><h1>Слайд №23</h1></div>
<div>1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.
</div>
<?php
//Слайд 23 №1
echo "<br>";
$str4="День был солнечным.";
echo $str4;
$sim=mb_strlen($str4);
echo "<br>";
echo "В строке $sim символов";
echo "<br>";
 if ($sim > 5) {
     $str5 = mb_substr($str4, 0, 5);
     echo "$str5 ...";
 }
else{
    echo $str4;
}
echo "<br><br>";
?>
<div>2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
</div>
<?php
//Слайд 23 №2
echo "<br>";
$str7="Текст - это предложения, связанные между собой по смыслу.";
echo $str7;
echo "<br>";
$str_a=str_replace("а", "1", $str7);
//echo $str_a;
//echo "<br>";
$str_a=str_replace("б", 2, $str_a);
//echo $str_a;
//echo "<br>";
$str_a=str_replace("с", 3, $str_a);
echo $str_a;
echo "<br>";
echo "<br>";
?>

<div>3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
</div>
<?php
//Слайд 23 №3

$str_abc="abc abc abc";
$arr_abc=str_split($str_abc);
echo "<br>";
print_r($arr_abc);
for($i=count($arr_abc)-1; $i>=0; $i--){
    if($arr_abc[$i]=="b"){
        $poz=$i;
        break;
    }
}
echo "<br>";
echo "Позиция последней буквы b => $poz";
echo "<br><br>";
?>

<div>4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.

</div>
<?php
//Слайд 23 №4
$str_abc="html css php";
$arr_str_n=explode(' ', $str_abc);
echo "<pre>";
print_r($arr_str_n);
echo "</pre>";
?>
<div>5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.

</div>
<?php
//Слайд 23 №5
$date1_str="10-10-2024";
$date2_str="15-10-2024";
$date1=date_create($date1_str);
$date2=date_create($date2_str);
$interval = date_diff($date1, $date2);
echo "<br>";
echo "Дата1 => $date1_str";
echo "<br>";
//print_r($interval);
echo "Дата2 => $date2_str";
echo "<br>";
echo $interval->format('разница %a дней');
?>
<?php include 'assets/footer.php' ?>

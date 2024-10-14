<h2>Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</h2>
<?php
$str="Hi gye!";
$str2=mb_substr($str,6,1);
if (mb_strlen($str)>5) {
   $str=$str2 . "...";
   echo $str;
}
else {
    echo $str;
}
?>

<h2>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
</h2>
<?php
$str="acab";
$str= str_replace("a","1",$str);
$str= str_replace("b","2",$str);
$str= str_replace("c","3",$str);
echo $str;
?>


<h2>Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</h2>
<?php
$str = "abc abc abc";
echo strpos($str,"b",-2);
?>

<h2>Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
</h2>

<?php
$str="html css php";
$arr= explode(" ",$str);
$arr1=$arr[0];
$arr2=$arr[1];
$arr3=$arr[2];
print_r($arr1);
print_r($arr2);
print_r($arr3);
?>

<h2>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.
</h2>
<?php
$str="14.11.1994";
$str2="9.10.2024";
$arr=explode(".",$str);
$arr2=explode(".",$str2);
for($i=0;$i<=count($arr)-1;$i++) {
    $arr[$i] = (int)$arr[$i];
}
for($i=0;$i<=count($arr2)-1;$i++) {
    $arr2[$i] = (int)$arr2[$i];
}
$daysLast=($arr[2] * 365) + ($arr[1] * 30) + $arr[0];
$daysToday=($arr2[2] * 365) + ($arr2[1] * 30) + $arr2[0];
$days=$daysToday-$daysLast;

echo $days;
?>



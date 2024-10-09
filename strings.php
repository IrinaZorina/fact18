<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>

    <div class="TaskCycles">


<?php
echo 'Задача 1. Слайд 23. Дана строка. Если в этой строке более 5-ти символов -
 вырежьте из нее первые 5 символов, добавьте 
 троеточие в конец и выведите на экран. 
 Если же в этой строке 5 и менее символов 
 - необходимо вывести эту строку на экран.';
echo '<br><br>';
$str = 'Hello World';
echo $str;
echo '<br><br>';
$str1 = '';
if (strlen($str) > 5) {

    $str1 = substr($str, 5) . '...';
}
else {

    $str1 = $str;
}

echo $str1;

echo '<br><br>';
echo 'Задача 2. Слайд 23.';
$str2 ='abbsakfdsfsdasfgsa';
    $search = ['a', 'b', 'c'];
    $replace = ['1', '2', '3'];
    $result = str_replace($search, $replace, $str2);
echo '<br><br>';
echo $result;
echo '<br><br>';
echo 'Задача 3. Слайд 23.';
echo '<br><br>';
$str3 = 'abc abc abc';
echo $str3;
$str4 = strrpos($str3, 'b');
echo '<br><br>';
echo $str4;
echo '<br><br>';
echo 'Задача 4. Слайд 23.';
echo '<br><br>';
$str5 = 'html css php';
echo $str5;
$arr5 = explode(' ', $str5);
echo '<br><br>';
print_r($arr5);
echo '<br><br>';
echo 'Задача 5. Слайд 23.';
echo '<br><br>';
$strdate1 = '10-02-2015';
echo $strdate1;
$strdate2 = '20-03-2016';
echo '<br><br>';
echo $strdate2;
$strFirstdateDay = substr($strdate1, 0, 2);
$strFirstdateMonth = substr($strdate1, 3, 2);
$strFirstdateYear = substr($strdate1, 6, 4);

$strSeconddateDay = substr($strdate2, 0, 2);
$strSeconddateMonth = substr($strdate2, 3, 2);
$strSeconddateYear = substr($strdate2, 6, 4);

$strDiffDay = $strSeconddateDay - $strFirstdateDay;
$strDiffMonth = $strSeconddateMonth - $strFirstdateMonth;
$strDiffYear = $strSeconddateYear - $strFirstdateYear;
if ($strDiffMonth !== 0) {
    $strMonthtoDays = $strDiffMonth * 30;
}
if ($strDiffYear !== 0) {
    $strYearstoDays = $strDiffYear * 365;
}

$SumDays = $strDiffDay + $strMonthtoDays + $strYearstoDays;
echo '<br><br>';
echo $strDiffDay;
echo '<br><br>';
echo $strDiffMonth;
echo '<br><br>';
echo $strDiffYear;
echo '<br><br>';
echo "Количество дней между датами";
echo '<br><br>';
echo $SumDays;
?>

    </div>
<?php
include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>
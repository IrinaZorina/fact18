<?php require_once 'header.php'?>

<?php
/*mkdir("test")
*/?>
<?php
$strTaskOne = fopen("FIO.txt", "r");
$str1TaskOne = file_get_contents("FIO.txt");
echo mb_substr($str1TaskOne, 0, 15);


$str1TaskTwo = file('file1.txt');
$str2TaskTwo = file('file2.txt');
$arr[] =0;
$i = 0;
foreach ($str1TaskTwo as $value){
    foreach ($str2TaskTwo as $value2){
        if ($value != $value2){
            $arr[$i] = $value2;
            $i++;
        }
    }

    $arr[$i] = $value;
    $i++;
}

?>


<?php require_once 'footer.php'?>

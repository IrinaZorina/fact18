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
$array1 = array_merge($str1TaskTwo, $str2TaskTwo);
$result = array_diff($array1, array_diff_assoc($array1, array_unique($array1)));
file_put_contents("file3.txt", $result);

$array2 = array_intersect($str1TaskTwo,$str2TaskTwo);
file_put_contents("file32.txt", $array2);
?>
<?php require_once 'footer.php'?>

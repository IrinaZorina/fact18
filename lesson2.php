<?php
$str=fopen('read.txt', 'r');

$str2=fread($str, 1);
//echo $str;
while ($str2 != null){
    if ($str2=="H"){
        echo 'h';
    }
    elseif ($str2=="\n"){

    }
    elseif ($str2=="\r"){

    }
    else{echo $str2 . '<br>';}

    $str2=fread($str, 1);
}
$str=file(
    'read.txt');
print_r($str);
$str2=file_get_contents('read.txt');
echo $str2;
?>

<?php
print_r($_FILES);
$temp = $_FILES['my_file']['tmp_name'];
echo $temp;
$name = $_FILES['my_file']['name'];

$path = 'upload/' . $name;

move_uploaded_file($temp, $path);

//file_put_contents('hello.txt', 'Hello, world! I`m  Tatiana');
//mkdir('test');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
    <input type="text" name="name">Введите имя
    <input type="file" name="my_file">Выберите файл
    <input type="submit">

</form>
</body>
</html>








<?php

/*function sum($a){
    $a +=10;
    echo $a ;
}
$b=15;
echo $b;
sum(10);
/*$str2="HELLO";
$arr=str_split($str2,3);
print_r($arr);
echo "<br>";
$arr2=str_split($str2,2);
print_r($arr2);
echo "<br>";
$arr3=[];
$arr3[]=mb_substr($str2, 0,2);
$arr3[]=mb_substr($str2, 2,4);
print_r($arr3);
echo "<br>";
$str3='fact';
 echo str_replace ('f', 'F', $str3);
echo "<br>";
 $str4='Закирова Регина Артуровна';
echo str_replace ('Закирова Регина Артуровна', 'Регина Артуровна', $str4);
echo "<br>";

$str5='Привет, мир';
$str6=str_replace(', ', '', $str5);
echo "$str6";
echo "<br>";
$a=mb_strlen($str6);
echo $a;
echo "<br>";
$col_I=0;


/*$str="qwerty";
echo md5($str);
echo "<br>";
echo password_hash($str,PASSWORD_DEFAULT);
echo "<br>";
echo sha1($str);
echo "<br>";*/

/*$str="Надежный веб-интегратор Факт!";
$str2="fact";
echo mb_substr($str, 9, 3);
echo "<br>";
echo mb_substr($str2, 0, 4);
echo "<br>";
echo substr($str, 0, -1);
echo "<br>";
echo mb_strlen($str2);
echo "<br>";
echo str_replace(array("Надежный","веб-интегратор", "Факт"), array("Reliable", "web-integrator", "Fact"),$str);
echo "<br>";
$str2="HELLO";
echo strtolower($str2);
echo "<br>";
echo str_split($str2);
echo "<br>";*/


/*$arr=['blu', 'red', 'green', 'yellow'];
print_r($arr);
echo "<br>";
$str=implode(", ", $arr);
echo $str;
echo "<br>";
$arr2=explode(", ", $str, -2);
print_r($arr2);*/


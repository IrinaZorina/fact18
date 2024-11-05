<?php include 'assets/header.php' ?>
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
<h1>Слайд № 12 </h1>
<div> 3. Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.
  <br>  <a href="text_1.txt">text_1.txt</a> <br>
    <?php

    $line1=fopen('text_1.txt', 'r');
    $name=fread($line1, filesize('text_1.txt'));
     $arr=explode(", ", $name);
    // print_r($arr);
     echo "<br>";
     echo $arr[0]. ' ';
    echo $arr[1];
    echo "<br>" . "<br>";
  ?>

</div>
<div> 4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.
    <br>5. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.


    <br>  <a href="text_2.txt">text №1</a> <br>
    <br>  <a href="text_3.txt">text №2</a> <br>
    <br>  <a href="text_4.txt">text №3 строки без повторов</a> <br>
    <br>  <a href="text_5.txt">text №4 повторяющиеся строки</a> <br><br>
    <?php

    $t2=fopen('text_2.txt', 'r');
    $t3=fopen('text_3.txt', 'r');
    $t4=fopen('text_4.txt', 'w');
    $t5=fopen('text_5.txt', 'w');
    $text2=fread($t2, filesize('text_2.txt'));
    $text3=fread($t3, filesize('text_3.txt'));
    $arr_t2=explode("\n", $text2);
    $arr_t3=explode("\n", $text3);
    print_r($arr_t2);
    echo "<br>";
    print_r($arr_t3);
    echo "<br>";
     foreach ($arr_t2 as $key2=>$value2) {
         fwrite($t4, $value2 );
     }
    fwrite($t4, "\n" );
    foreach ($arr_t3 as $key3=>$value3) {
        $result = in_array($value3, $arr_t2);
        var_dump($result);
        if ($result==false) {
            fwrite($t4, $value3 );
        }
        else{fwrite($t5, $value3 );}
    }
    ?>
</div>
</body>
</html>
<?php include 'assets/footer.php'?>
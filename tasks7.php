<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
    </form>
</body>
</html>
<?php // задача про файл
echo "<pre>";
print_r($_FILES);
echo "<pre>";
$dir=__DIR__ ."/upload";
$name = $_FILES["file"]["name"];
if(!empty($_FILES)) {
    move_uploaded_file($_FILES["file"]["tmp_name"],"$dir/$name");
    echo "Файл загружен";
    echo __DIR__."<br>";
}

file_put_contents('hello.txt', "Hello, world! I'm Name");
    if(!file_exists('test'))
    mkdir('test');;
$str=file_put_contents('text.txt', "Sokolova,Anastasya \n заказ доставили во время");
$arr= file("text.txt");
echo $arr[0];
$text1=file("1.txt");
$text2=file("2.txt");
file_put_contents('3.txt', "");
    for($i=0;$i<=count($text1)-1;$i++) {
       file_put_contents("3.txt",$text1[$i],FILE_APPEND);
       for($j=0;$j<=count($text2)-1;$j++) {
       }
       if($text1[$i]!=$text2[$j]) {
        file_put_contents("3.txt",$text2[$j],FILE_APPEND);
    }
    }
    $text1_1=file("1.1.txt");
    $text2_1=file("2.1.txt");
    for($i=0;$i<=count($text1_1)-1;$i++) {
        file_put_contents("3.1.txt",$text1_1[$i],FILE_APPEND);
        for($j=0;$j<=count($text2_1)-1;$j++) {
            if($text1_1[$i]==$text2_1[$j]) {
                file_put_contents("3.1.txt",$text2_1[$j]);
            }
        }
    }

?>


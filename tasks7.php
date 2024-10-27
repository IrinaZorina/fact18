<?php
include "header.html";
?>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">
    </form>
</body>
<?php // задача про файл
echo "<pre>";
print_r($_FILES);
echo "<pre>";
$dir=__DIR__ ."/upload";
if(!empty($_FILES)) {
    $name = $_FILES["file"]["name"];
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
$array=array_merge($text1,$text2);
$array=array_unique($array);
file_put_contents("3.txt",$array);

$worldRepeat=array_intersect($text1,$text2);
file_put_contents("4.txt",$worldRepeat);
include "footer.html";
?>


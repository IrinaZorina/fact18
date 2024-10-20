<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="php, html, css, bitrix" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $vremya?>"/>
    <link rel="stylesheet" href="inc/header.css"/>
    <link rel="stylesheet" href="inc/footers.css"/>
  </head>

<body>
  
<div class="line1"></div>
<?php
    include 'inc/header.php';
?>
<div class="line2"></div>

<p>Урок 7-8 PHP, слайд 23 - задание 1:</p>
<?php
$stroka = "Hello, world!";
$length = mb_strlen($stroka);
if ($length > 5) {
  echo mb_substr($stroka, 0, 5) . "...";
} else {
    echo "$stroka <br>";
}
?>

<p>Урок 7-8 PHP, слайд 23 - задание 2:</p>
<?php
$str = "ababcc";
$str2 = str_replace(["a", "b", "c"], ["1", "2", "3"], $str);
echo $str2;
?>

<p>Урок 7-8 PHP, слайд 23 - задание 3:</p>
<?php
$str = "abc abc abc";
echo strrpos($str, "b");
?>

<p>Урок 7-8 PHP, слайд 23 - задание 4:</p>
<?php
$str = "html css php";
$array_str = explode(' ', $str);
print_r($array_str);
?>

<?php
    include 'inc/footer.php';
?>

</body>
</html>
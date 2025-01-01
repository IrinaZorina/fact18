<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/lines_style.css">
    <link rel="stylesheet" href="../header/assets/header_style.css">
    <link rel="stylesheet" href="../footer/assets/footer_style.css">
    <title>Lines</title>
</head>
<body>
<?php
include "../header/header.php";
?>
<main>
    <h1>Строки</h1>
    <div class="lines_task_1">
        <h2> Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов,
            добавьте многоточие в конец и выведите на экран.
            Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</h2>
    </div>
    <div class="solution_lines_task_1">
        <?php
        $str1 = 'Hello World';
        if (mb_strlen($str1) > 5){
            $str2 = mb_substr($str1, 5);
            echo "$str2...";
        }
        else{
            echo $str1;
        }
        ?>
    </div>
    <div class="lines_task_2">
        <h2>Дана строка $str.
            Замените в ней все буквы 'a' на цифру 1,
            буквы 'b' - на 2,
            а буквы 'c' - на 3.</h2>
    </div>
    <div class="solution_lines_task_2">
        <?php
        $str = 'Clothing brands: Balenciaga, Burberry, Scotch & Soda';
        echo "$str<br>";
        echo strtr($str, ['a' =>'1', 'b'=>'2', 'c'=>'3', 'A' =>'1', 'B'=>'2', 'C'=>'3']);
        ?>
    </div>
    <div class="lines_task_3">
        <h2>Дана строка 'abc abc abc'.
            Определите позицию последней буквы 'b'.</h2>
    </div>
    <div class="solution_lines_task_3">
        <?php
        $str = 'abc abc abc';
        echo "$str";
        echo "<br>";
        echo "Последний символ b находится на позиции ";
        echo strpos($str, 'b', -2);
        ?>
    </div>
    <div class="lines_task_4">
        <h2>Дана строка 'html css php'.
            С помощью функции explode
            запишите каждое слово этой строки в отдельный элемент массива.</h2>
    </div>
    <div class="solution_lines_task_4">
        <?php
        $str = 'html css php';
        echo "$str";
        $arr = explode(' ', $str, 3);
        echo "<br>";
        print_r($arr);
        ?>
    </div>
</main>
<?php
include "../footer/footer.php";
?>
</body>
</html>


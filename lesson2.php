<?php
/*$year=1980;

for ($i=1; $i<=50; $i++) {
   if ($i%3==0 && $i%5==0){
       echo "<b>$i</b>" ;
   }

   else if ($i%3==0){
       echo "<i>$i</i>";
   }
   else echo $i;
    echo '<br>';
}*/
// Модуль 23 задание4
$ch = 1;
$zn = 1;
$i = 0;
$sum = 0;
while ($sum < 10) {
    $sum = $sum + $ch / $zn;
    $i++;
    echo "итерация $i";
    echo '<br>';
    echo "сумма $sum";
    echo '<br>';
    $ch = $ch + 3;
    $zn = $zn + 1;
}
echo '<br>';
echo "После $i итераций сумма равна $sum";
echo '<br><br>';
echo '<br>Модуль 23 задание3<br>';
echo '<br><br>';
// Модуль 23 задание3
$a = 1;
$it = 1;
$pi = 0;
$summa = 1;
do { $it++;
  //  echo "it $it";
  //  echo '<br>';

    $a=$a+2;
  //  echo "a $a";
  //  echo '<br>';
    if ($it % 2 == 0) {
        $summa = $summa - 1/$a;
     //   echo "summa1 $summa";
     //   echo '<br>';
    }
    else {
        $summa = $summa + 1/$a;
    //    echo "summa2 $summa";
    //    echo '<br>';
    }
    $pi=4*$summa;
//echo "pi $pi";
//echo '<br>';
}
while (abs(3.141 - $pi) >= 0.01);
echo "Количество слагаемых $it";
echo '<br>';
echo "Последнее слагаемое 1/$a";
echo '<br>';
echo "Полученное по формуле Грегори значение Пи с точностью 0.01 = $pi";
echo '<br><br><br><br>';
echo '<br><br>Модуль 25 задание1<br><br>';
// Модуль 25 задание1

for ($x=5; $x<=13; $x++){
    echo $x;
    echo "<br>";
}
echo '<br><br><br><br>';

echo '<br><br>Модуль 25 задание2 while<br><br>';
// Модуль 25 задание2 while
$num=1000;
$iter=0;
while ($num > 50){
    $iter++;
    $num=$num/2;
    echo $iter;
    echo "<br>";
    echo $num;
    echo "<br>";
}


echo '<br><br>ntrcn<br><br>';
echo '<br><br>Модуль 25 задание2 for<br><br>';
// Модуль 25 задание2 for
for ($z=1000, $p=0; $z >= 25; $z=$z/2, $p++){
    echo $p;
    echo "<br>";
    echo $z;
    echo "<br>";
}
echo '<br><br>25 задание3<br><br>';
// Модуль 25 задание3
for ($h=0; $h<=10; $h++){
    echo "переменная Si равна $h, «";
    for ($Si=0; $Si<=10-$h; $Si++){
        echo "$Si";
        echo ", ";
    }

    echo "»";
    echo "<br>";

}

echo '<br><br><br><br>';
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
<select>
    <?
    for ($year = 1980; $year <= 2024; $year++) {
        echo "<option>$year</option>";
        echo "<br>";
    }


    ?>
</select>

</body>
</html>


<?php

/*$user = 'flvby';
switch ($user){
    case 'клиент':
        echo 'Привет клиент'; break;
    case 'админ':
        echo 'Привет админ';break;
    case 'менеджер':
        echo 'Привет менеджер';break;
    default:
        echo 'Привет юзер';

}
for ($i = 0, $z=1; $i < 10; $i++, $z++ ){
    echo $i,$z;
}
/*$i=0;
while (($i++<10)){
    echo $i;
  }
echo '<br>';
$i=1;
do {
    echo $i;
}
while (($i++<10))


$a=mt_rand(1,10);
$b=mt_rand(1,10);
//if ($a>$b){
//  $max=$a;
//}
//else{
//   $max=$b;
//}
$a=1;
$b=2;
$c=3;
$d=$b**2-4*$a*$c;

    $x1=(-$b+sqrt($d))/(2*$a);
    $x2=(-$b-sqrt($d))/(2*$a);
if ($d>0) {
    echo $x1;
    echo $x2;
}
else if ($d<0){
   echo 'корней нет';
}
else ($d=0){
    echo $x1;
}*/

?>




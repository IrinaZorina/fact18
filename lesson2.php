<?php
$arr7 = [
    'fruits' => [
        'apple' => 'яблоко',
        'banana' => 'банан',
        'pinapple' => 'ананас'
    ],
    'vegetable'=>[
        'tomato'=>'помидор',
        'cucumber'=> 'огурец'
    ],
    'drink'=>[
        'cofe'=> 'кофе',
        'tea' => 'чай'
    ]

];

$result=0;
$arr8=[50,45,40,35,30];
foreach ($arr8 as $key=>$value){
    $result=$result+$value ;
}echo "$result";
echo "<br>";


$arr=[];
for ($i=0;$i<=10;$i++)
{
    $arr9[]=mt_rand(1,7);
   }
var_dump($arr9);
echo "<br><br>Прямой вывод";

for ($i=0; $i<=count($arr9)-1; $i++)

{
    echo"<br>". "i = $i". " => ".  $arr9[$i];
}
echo "<br><br>Обратный вывод";
for ($i=count($arr9)-1; $i>=0; $i--)
{
    echo"<br>". "i = $i". " => ".  $arr9[$i];
}




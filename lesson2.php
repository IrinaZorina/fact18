<?php
function f($i,$j){
    if($i<$j){
        return $j . '<br>';
    }
    else{
        return $i . '<br>';
    }
}
$i=5;
$j=9;
$n=f($i,$j);
echo $n;
{

}
function gipotenuza($a, $b)
{
 return  sqrt(pow($a,2) + pow($b,2));
};
    $a=4;
    $b=5;
    $c=gipotenuza($a,$b);
echo $c;
echo "<br>";

function ten($d)
{for($d=10; $d<=10000000; $d=$d*10){
    if($d<=1000000){
        echo $d . '<br>';
    }
    else{
        echo 'вы достигли предела' . '<br>';
    }
}

}
ten(10);

function aa()
{

}




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


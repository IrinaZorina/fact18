<?php
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>

<div class="TaskCycles">

<?php

echo "Задача 4, слайд 15.Дано N действительных случайных чисел в диапазоне от -100 до 100. 
Найти минимальное положительное число и максимальное отрицательное число.<br>";  

for ($i = 0; $i < 10; $i++) {
    $arr1[$i] = mt_rand(-100,100);
}
print_r($arr1);
$min = 0; 
echo '<br><br><br><br>';

$firstpl = 0; 
for ($b = 0; $b < count($arr1); $b++) {
    if ($arr1[$b] > 0) {
        $firstpl = $arr1[$b];
        break;  
    }
}
     
for ($h = 0; $h < count($arr1); $h++) {
    if ($arr1[$h] > 0 and $arr1[$h] < $firstpl) {
        $firstpl = $arr1[$h];
    }
}

echo 'Минимальное положительное значение в массиве = ' . $firstpl;

$firstot = 0; 
for ($b = 0; $b < count($arr1); $b++) {
    if ($arr1[$b] < 0) {
        $firstot = $arr1[$b];
        break;  
    }
}
     
for ($h = 0; $h < count($arr1); $h++) {
    if ($arr1[$h] < 0 and $arr1[$h] < $firstot) {
        $firstot = $arr1[$h];
    }
}
echo '<br><br>';
 echo 'Максимальное отрицтельное значение в массиве = ' . $firstot;
echo '<br><br>';

echo 'Задача 5. Слайд 16';
echo '<br><br>';
$arr15 = [
    'Математика' => [
        'Коля' => mt_rand(2,5),
        'Маша' => mt_rand(2,5),
        'Петя' => mt_rand(2,5)

    ],
    'Физика' => [
        'Коля' => mt_rand(2,5),
        'Маша' => mt_rand(2,5),
        'Петя' => mt_rand(2,5)

    ],
    'Химия' => [
        'Коля' => mt_rand(2,5),
        'Маша' => mt_rand(2,5),
        'Петя' => mt_rand(2,5)

    ],
    'Информатика' => [
        'Коля' => mt_rand(2,5),
        'Маша' => mt_rand(2,5),
        'Петя' => mt_rand(2,5)

    ],
];

print_r($arr15);
echo '<br><br>';

foreach ($arr15 as $key => $value) {
    foreach ($value as $key_new => $item) {
        if ($key === 'Физика') {
            for ($q = 0; $q < count($item); $q++) {
            $SumPh = $SumPh + $item;
            $rp = $rp + count($item);
            }
            
            
        }
        
    }
    
}
$AvPh = $SumPh/$rp;

foreach ($arr15 as $key => $value) {
    foreach ($value as $key_new => $item) {
        if ($key === 'Математика') {
            for ($q = 0; $q < count($item); $q++) {
            $SumMat = $SumMat + $item;
            $r = $r + count($item);
            }
            
            
        }
        
    }
    
}
$AvMat = $SumMat/$r;

foreach ($arr15 as $key => $value) {
    foreach ($value as $key_new => $item) {
        if ($key === 'Информатика') {
            for ($q = 0; $q < count($item); $q++) {
            $SumIn = $SumIn + $item;
            $ri = $ri + count($item);
            }
            
            
        }
        
    }
    
}
$AvIn = $SumIn/$ri;


foreach ($arr15 as $key => $value) {
    foreach ($value as $key_new => $item) {
        if ($key === 'Химия') {
            for ($q = 0; $q < count($item); $q++) {
            $SumCh = $SumCh + $item;
            $rc = $rc + count($item);
            }
            
            
        }
        
    }
    
}
$AvCh = $SumCh/$rc;



echo 'Средняя оценка по математике:  ' . $AvMat;
echo '<br><br>';
echo 'Средняя оценка по физике:  ' . $AvPh;
echo '<br><br>';
echo 'Средняя оценка по информатике:  ' . $AvIn;
echo '<br><br>';
echo 'Средняя оценка по химии:  ' . $AvCh;

echo '<br><br<br><br>';
echo '6 задача. 16 слайд';
echo '<br><br';





$arr17 = [];
for ($b = 1; $b < 13; $b++) {
    $arr17[] = [
        'Куба, месяц номер ' . $b => mt_rand(-5, 35),
        'Тринидад, месяц номер ' . $b => mt_rand(-5, 35),
        'Ямайка, месяц номер ' . $b => mt_rand(-5, 35),
        'Гаити, месяц номер ' . $b => mt_rand(-5, 35),
   
    ];
    
    

}

foreach ($arr17 as $key => $value) {
    echo '<pre>';
    print_r($arr17[$key]);
    echo '</pre>';
}



$arr18 = [];
$max1 = []; 
foreach ($arr17 as $key => $value) {
    foreach ($value as $key_new => $item) {
        for ($j = 0; $j < 12; $j++) {

        if ($key == $j) {
                
                if ($item > $max1[$j]) {
                    $max1[$j] = $item;
                    
                 
              }  
              
            $arr18[$j] = $max1[$j];
              
        }
        
        }
      
    }
    
}


echo '<br><br>';
echo 'Максимальные значения по месяцам';
echo '<br><br>';
print_r($arr18);


echo '<br><br><br><br><br><br>';
echo 'Задача 7. Слайд 16';
echo '<br><br>';

$arr22 = [];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
      
    $arr22[$i][$j] = mt_rand(-5,5);
    
     
    }
     
    print_r($arr22[$i]);
    echo '<br><br>'; 
}

$max22 = 0;
$max33 = []; 
$max44 = [];
$max231 = [];   

for ($i = 0; $i < 5; $i++) {
        $max33 = $arr22[$i];
        
        for ($b = 0; $b < 5; $b++) {
            if ($max33[$b] > $max22) {
                $max22 = $max33[$b]; 
                
                 
             
                
            }
            
             
        }
        echo 'Максимальный элемент в строке ' . $max22;
        echo '<br>'; 
        $max231[$i] = $max22; 
        $max22 = 0;          
    }


$max232 = 0; 
for ($b = 0; $b < 5; $b++) {
    if ($b % 2 !== 0) {
    $max232 = $max232 + $max231[$b];
    }
}
 echo'<br>';
 echo 'Сумма по четным строкам = ' . $max232; 








?>




</div>  


<?php
include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>
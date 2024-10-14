
    <?php
include "header.html";
?>
    <h2 class="task">Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.
    </h2>
<?php
$arr=["assets/images/fer.jpg","assets/images/ford.jpg","assets/images/porsh.jpg"];
$rand=mt_rand(0,2);
echo "<img src=$arr[$rand]>";
?>
<h2 class="task">Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.
</h2>
<?php
$n=mt_rand(-100,100);
$arr=[];
$i=0;
while($i<=3) {
   $arr[$i]=$n;
    $i++;

}

for($j=0;$j<=count($arr)-1;$j++) {
    $max=0;
    $min=0;
    if($arr[$j]<$max) {
        $max=$arr[$j];
    }
    if($arr[$j]>$min) {
        $min=$arr[$j];
    }
}
echo "$max-макс отриц, $min-мин положительное"
?>
<h2 class="task">Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.
</h2>
<?php
$journal= [
    "arefyeva"=>[
        "maths"=>[3,4,4,5],
        "phisycs"=>[5,5,5,5],
        "chemistry"=>[3,4,5,5],
        "info"=>[2,4,4,4]
    ],
    "sokolova"=>[
        "maths"=>[3,4,4,5],
        "phisycs"=>[5,4,5,5],
        "chemistry"=>[5,4,5,5],
        "info"=>[3,4,4,4]
    ],
    "Ivanova"=>[
        "maths"=>[3,4,4,3],
        "phisycs"=>[5,4,5,5],
        "chemistry"=>[3,4,5,5],
        "info"=>[2,4,5,4]
    ]
    ];
$sum=0;
    foreach($journal as $key => $value) {
        echo "<br>$key=><br>";
        foreach($value as $key2=>$value2) {
      for($i=0;$i<=count($value2)-1;$i++){
        $sum+=$value2[$i];
      }
      echo "$key2=>сумма-$sum<br>";
      $a=$sum/count($value2);
      echo "$key2=>среднее значение-$a<br>";
        $sum=0;    
        }
  
    }

    ?>
  <h2 class="task" > Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.
  </h2>
  <?php
  $islands = [
    "Куба"=> ["january"=>26,"feb"=>23,"octob"=>27],
    "Тринидад"=>["january"=>18,"feb"=>23,"octob"=>28],
    "Ямайка"=>["january"=>24,"feb"=>24,"octob"=>27],
    "Гаити"=>["january"=>28,"feb"=>23,"octob"=>30]
  ];
  $islands2=[];
  $max=0;
foreach($islands as $key=>$value) {
    foreach($value as $key2=>$value2) {
        if($value2>$max) {
          $max=$value2;
        }
    }
    $islands2[$key]=$key2;
    $islands2[$value2]=$max;
}
  echo "<pre>";
  print_r($islands2);
  echo "</pre>";

  ?>
  <h2 class="task">Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.
  </h2>
<?php
$array=[
    [1,2,3,4,5,6],
    [7,8,9,10,11,12],
    [13,14,15,16,17,18],
    [19,20,21,22,23,24],
    [25,26,27,28,29,30]
];
$max=0;

    for ($i=0;$i<=count($array)-1;$i++) {
        for($j=0;$j<=count($array[$i])-1;$j++) {
          echo $array[$i][$j];
        }

       
        
}

include "footer.html";
?>

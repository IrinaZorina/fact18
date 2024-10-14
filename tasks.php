
  <?php
$time = date("H");
$background_color = "blue";
if($time>20 && $time<8) $background_color;
else $background_color="yellow";
include "header.html";
?>
<style>
  body {
    background-color: <?php echo $background_color;?>;
  }
  </style>
    <h1 class="slide">Слайд № 23</h1>
    <h2 class="task">Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки.</h2>
    <?php
    for($i=1;$i<=30;$i++) {
        if($i%2==0) echo"$i<br>";
    }
    ?>
    <h2 class="task">Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным.
    </h2>
    <?php
    for($i=1;$i<=50;$i++) {
        if($i%3==0) echo "<i>$i</i><br>";
        if($i%5==0 && $i%3==0) echo "<b>$i</b><br>";
        echo "$i<br>";
    }
    ?>
    <h2 class="task">Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01
    </h2>
    <?php
     $a=1;
     $b=3;
     $pi=1;
     $count=0;
     while($pi>0.01) {
       $pi=$a-$a/$b;
       $count++;
       $b+=2;
       $pi=+$a/$b;
       $count++;
       $pi=round($pi,2);
       echo "$pi<br>";
   
     }
     echo " минимальное количество слагаемых - $count";
     ?>

    <h2 class="task">Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? 
    </h2>
    <?php
     $sum=0;
     $count=0;
     for($i=1,$j=1; $sum<10;$i+=3,$j++) {
        $sum+=($i/$j);
        $count++;
        if ($sum>10) break;
    
     }
     echo "нужно сложить - $count элементов<br>";
     echo $sum;
     echo "<br>";
     ?>

     <h1>Слайд №25</h1>
     <h2 class="task">Выведите столбец чисел от 5 до 13.</h2>
     <?php
     for($i=5;$i<13;$i++) {
        echo "$i<br>";
        $i++;
     }
     ?>
         <h2 class="task">Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
         </h2>
         <?php
          $num=1000;
          $count=0;
          while($num>50) {
            $num=$num/2;
            $count++;

          }
          echo "$num<br>";
          echo "$count<br>";


  
          for($i=1000;$i<50;$i/2) {
            echo "$i";

          }
          echo"$num<br>";

        ?>

<h2 class="task">Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. 
</h2>
<?php
$a=10;
$i=5;
$b=$a-$i;
$d=0;
while($d<=$b) {
  echo "$d,";
  $d++;
}
?>

<?php
include "footer.html";
?>   
<?php include  'assets/inc/header.php'?>
 <?php
// Слайд №23 задание 4
    $ch = 1;
    $zn = 1;
    $i = 0;
    $sum = 0;
    while ($sum < 10) {
    $sum = $sum + $ch / $zn;
    $i++;
  //  echo "итерация $i";
  //  echo '<br>';
  //  echo "сумма $sum";
  //  echo '<br>';
    $ch = $ch + 3;
    $zn = $zn + 1;
    }
  //  echo '<br>';
 // echo "После $i итераций сумма равна $sum";

    // Слайд 23 задание 3
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
  //  echo "Количество слагаемых $it";
 //   echo '<br>';
  //  echo "Последнее слагаемое 1/$a";
  //  echo '<br>';
  //  echo "Полученное по формуле Грегори значение Пи с точностью 0.01 = $pi";

    ?>
 <div class="title"><h1>Слайд №23</h1></div>
    <div>4. Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?</div> </br>
    <div>После <?echo $i?> итераций сумма равна <?echo $sum?></div></br></br>

    <div>3. Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01</div></br>
    <div>   Количество слагаемых <?echo $it?></div>
    <div> Последнее слагаемое 1/<?echo $a?></div>
    <div> Полученное по формуле Грегори значение Пи с точностью 0.01 = <?echo $pi?></div>
        </div>


    <div class="title"><h1>Слайд №25</h1></div>
    <div>1.Выведите столбец чисел от 5 до 13.</div></br>
    <div>   <?for ($x=5; $x<=13; $x++){
            echo $x;
            echo "<br>";
        }?></div> </br></br>

    <div>2.Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
    </div></br>



        <div class="conteiner3">
            <div>
                <div><h4>while</h4></div>
                <div><?  // Модуль 25 задание2 while
                    $num=1000;
                    $iter=0;
                    while ($num > 50){
                        $iter++;
                        $num=$num/2;
                        echo "итерация $iter";
                        echo "<br>";
                        echo "число $num";
                        echo "<br>";
                    }?>
                </div>
            </div>
            <div>
                <div><h4>for</h4></div>
                <div><?// Модуль 25 задание2 for
                    for ($z=1000, $p=0; $z >= 25; $z=$z/2, $p++){
                        echo "итерация $p";
                        echo "<br>";
                        echo "число $z";
                        echo "<br>";
                    }
                      ?>
                </div>
            </div>
        </div>
    3. Необходимо создать переменную ($i) и передавать в нее значение.<br>
    Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10».<br>
    Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9».<br>
    Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».<br>
    Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.<br><br>
    </div>
<div><?
    for ($h=0; $h<=10; $h++){
        echo "переменная Si равна $h, «";
        for ($Si=0; $Si<=10-$h; $Si++){
            echo "$Si";
            echo ", ";
        }

        echo "»";
        echo "<br>";

    }?></div>

<?php include  'assets/inc/footer.php'?>
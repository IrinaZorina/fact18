<section class="wrapper main_block border">
    <main>
        <h1 class="name">Домашняя работа "Функции"</h1>
        <div class="content">
            <div class="content_item">
                <p>Задача №1 слайд 15</p>
                <p>Создать функцию, которая сравнивает два числа и возвращает наибольшее.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $num1 = 5;
                    $num2 = 10;
                    echo "Большее число из {$num1} и {$num2}: " . maxNumber(5, 10);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 слайд 15</p>
                <p>Создать функцию, которая принимает длину двух катетов и
                   возвращает значение гипотенузы прямоугольного треугольника.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $num1 = 5;
                    $num2 = 10;
                    echo "Гипотенуза треугольника катетов из {$num1} и {$num2}: " . getHypotenuse($num1, $num2);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 слайд 15</p>
                <p>Создать функцию, которая принимает одно число (10).
                   В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.
                   Когда число будет больше 1 000 000, на экране должно появляться сообщение,
                   что вы достигли предела.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    echo multiNum();
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №4 слайд 16</p>
                <p>Создать функцию, в которой объявляется массив и случайными элементами.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    echo '<pre>';
                    print_r(randomArray());
                    echo '</pre>';
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №5 слайд 16</p>
                <p>Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $array = randomArray();
                    echo 'Среднеарифметическое: ' . arraySum($array);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №6 слайд 16</p>
                <p>Создать функцию, которая принимает строку. Вернуть количество слов в строке.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $string = 'Привет Академия Факт!';
                    echo 'Количество слов с строке \'' . $string . '\': ' . countWordsInString($string); ;
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №7 слайд 16</p>
                <p>*Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    // TODO: написать код
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №1 слайд 17</p>
                <p>Создайте функцию, которая принимает одномерный массив и возвращает массив,
                   заполненный случайными числами. </p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    echo '<pre>';
                    print_r(arrayInputNum($array));
                    echo '</pre>';
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №2 слайд 17</p>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $string = 'HTML, CSS, PHP, BITRIX';
                    echo strCountWords($string);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №3 слайд 17</p>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию,
                   которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $string = 'HTML, CSS, PHP, BITRIX';
                    stringRevers($string);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №4 слайд 17</p>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $string = 'HTML, CSS, PHP, BITRIX';
                    stringLength($string);
                    ?>
                </p>
            </div>
        </div>
        <div class="content">
            <div class="content_item">
                <p>Задача №5 слайд 17</p>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку</p>
            </div>
            <div class="content_item">
                <p>
                    <?php
                    $string = 'HTML, CSS, PHP, BITRIX';
                    echoOneLetter($string);
                    ?>
                </p>
            </div>
        </div>
    </main>
</section>

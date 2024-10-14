
<?php
$time = date("H");
$background_color = "blue";
if($time>20 && $time<8) $background_color;
else  $background_color="yellow";
include "header.html";
?>
    <main>
        <section>
            <img class="photo" src="assets/images/efb2a807-0c89-40e9-a274-d6dbd9805a47.jfif">
        </section>
        <section>
            <h1>Соколова Анастасия</h1>
            <div>
            <p>
                Всем привет! Я работаю в компании системным администратором.
                Увлекаюсь гитарой немного. Люблю сидеть за компьютером.
                Собираюсь в спортзал. Раньше играла профессионально в футбол.
                Мечтаю стать разрабочтиком.
            </p>
            <p>
                От курса очень много ожиданий. Как от верстки, так и от php и тд.
                Пока что сложно что-то сказать, но мы будем стараться работать. Ведь все зависит от нас.
            </p>
        </div>
        </section>
    </main>

    <h1>Спортивные машины</h1>
    <section class="container">
      <div class="car">
          <img src="assets/images/fer.jpg" alt=""><p class="text">текст</p>
      </div>
      <div class="car">
          <img src="assets/images/mustang.jpg" alt=""><p class="text">текст</p>
      </div>
      <div class="car">
          <img src="assets/images/ford.jpg" alt=""><p class="text">текст</p>
      </div>
      <div class="car">
          <img src="assets/images/porsh.jpg" alt=""><p class="text">текст</p>
      </div>
    </section>
  
  
      <h1>Города России</h1>
    <section class="containerTown">
      <div class="town">
          <img src="assets/images/ekb.jfif" alt=""><p class="text">текст</p>
      </div>
      <div class="town">
          <img src="assets/images/krasn.jpeg" alt=""><p class="text">текст</p>
      </div>
      <div class="town">
          <img src="assets/images/samara.jpg" alt=""><p class="text">текст</p>
      </div>
      <div class="town">
          <img src="assets/images/vlad.jpg" alt=""><p class="text">текст</p>
      </div>
    </section>
<?php   
$str= "Всем привет! Я работаю в компании системным администратором.
Увлекаюсь гитарой немного. Люблю сидеть за компьютером.
Собираюсь в спортзал. Раньше играла профессионально в футбол.
Мечтаю стать разрабочтиком.
<br>
От курса очень много ожиданий. Как от верстки, так и от php и тд.
Пока что сложно что-то сказать, но мы будем стараться работать. Ведь все зависит от нас.
<br>";  
    function color() {  //нахождения первой фразы
       global $str; 
        $arr= explode("!",$str);
        $class= "word";
        foreach($arr as $index => $elem) {
          if($index==0) return "<p class=$class>$elem</p>";
      }
       }

    echo color();
?>
<style type="text/css">
  body {
    background-color: <?php echo $background_color?>;
  }
  .word {
    color:brown;
  }
  .even {
    color:blueviolet;
  }
  .odd {
    color:chartreuse;
  }
</style>

<?php //подсчет четных слов
function counted($value) {
    $arr=explode(" ",$value);
    $text="";
    $classEven="even";
    $classOdd="odd";
    foreach($arr as $index=>$elem) {
        if($index%2==0) {
      $text="<span class=$classEven>$elem </span>";
      echo $text;
        }
            else {
                $text="<span class=$classOdd>$elem </span>";
                echo $text;
            } 
}

}
counted($str); //подсчет гласных

function vovels() {
    global $str;
    $str=mb_str_split($str);
    $vovelStr="аеёиоуыэюяАЕЁИОУЫЭЮЯaeiouAEIOU";
    $arrVovels=mb_str_split($vovelStr);
    $count=0;
    for ($i = 0; $i <count($str)-1; $i++) {
        for ($j = 0; $j <count($arrVovels)-1; $j++) {
            if($str[$i]==$arrVovels[$j]) $count++;
        }
      }
      return "<br>$count-гласных букв";

    
}
echo vovels();


function countWorlds() {
    $str= "Всем привет! Я работаю в компании системным администратором.
Увлекаюсь гитарой немного. Люблю сидеть за компьютером.
Собираюсь в спортзал. Раньше играла профессионально в футбол.
Мечтаю стать разрабочтиком.
<br>
От курса очень много ожиданий. Как от верстки, так и от php и тд.
Пока что сложно что-то сказать, но мы будем стараться работать. Ведь все зависит от нас.
<br>";
    return "<br>".str_word_count($str,0,"абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ")."cлов всего<br>";
}
echo countWorlds();


function d() {
    $dayBith = (int)mktime(0, 0, 0, 11, 14, 1994)/86400; 
    $today = (int)mktime(0, 0, 0, 10, 12, 2024)/86400;
    $day= date("14.11.1994");
    $day2= date("d.m.y");
    echo "дата рождения-$day<br>";
    echo "сегодня-$day2<br>";
    echo "разница дней-" . $dayBith-$today;


}
d();
?> 
<?php
include "footer.html";
?>

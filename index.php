<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/Styles/styles.css">
    <title>Document</title>
</head>
<?php
$time = date("H");
$background_color = "blue";
if($time>20 && $time<8) $background_color;
else  $background_color="yellow";
include "header.html";
?>
<style type="text/css">
  body {
    background-color: <?php echo $background_color?>;
  }
</style>
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
include "footer.html";
?>
</body>
</html>
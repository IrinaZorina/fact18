<?php
$time = date("H");
if ($time < 20 and $time > 8) {
    $vremya = "assets/css/day.css";
} 
else {
    $vremya = "assets/css/night.css";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="php, html, css, bitrix" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $vremya?>"/>
  </head>

  <body>
    
    <header>
      <img src="assets/image/logo.png" />
    </header>

    <div class="line"></div>

    <div class="photo">
      <img src="assets/image/images.jpg" />
    </div>

    <div class="one">
      <h1 class="zagolovok">Говорова Екатерина</h1>
    </div>
    <div class="textcols">
      <div class="two">
        Меня зовут Катя, мне 26 лет, и я живу в городе Магнитогорск. Училась в
        МГТУ имени Носова на педагога информатики и экономики. На данный момент
        работаю не по профессии, но два года я пропработала разработчиком
        электронных курсов в компании Sike. У меня есть кошка (Сакура) и щенок
        (Рокки). Рокки появился в моей семье недавно и ему всего 4 месяца. В
        свободное время люблю гулять, смотреть сериалы или просто отдыхать!
      </div>
      <div class="two">
        Мне очень понравилось, как прошли первые два урока. Все подробно и
        понятно объясняла Ирина. Надеюсь, в дальнейшем я буду схватывать все
        также легко!
      </div>
    </div>
    <h1 class="center">Породы собак</h1>

    <div class="grid">
      <div class="tabl1">
        <img src="../assets/image/koker2.jpg" />
        <p class="text1">Привет! Я кокер спаниель</p>
      </div>
      <div class="tabl2">
        <img src="../assets/image/bigl1.png" />
        <p class="text2">Привет! Я бигль</p>
      </div>
      <div class="tabl3">
        <img src="../assets/image/laba.jpeg" />
        <p class="text3">Привет! Я лабрадор</p>
      </div>
      <div class="tabl4">
        <img src="../assets/image/rotvejler.jpg" />
        <p class="text4">Привет! Я ротвейлер</p>
      </div>
    </div>

    <h2 class="shrift">Разновидности кокер спаниелей</h2>

    <div class="conteiner">
      <div class="cont1">
        <img src="../assets/image/mur.jpg">
        <p class="font">Английский кокер-спаниель</p>
      </div>
      <div class="cont2">
        <img src="../assets/image/cuvzkq8ugia.jpg" />
        <p class="font">Американский кокер-спаниель</p>
      </div>
      <div class="cont3">
        <img src="../assets/image/russia.jpg" />
        <p class="font">Русский охотничий спаниель</p>
      </div>
      <div class="cont4">
        <img src="../assets/image/franch.jpg" />
        <p class="font">Французский спаниель</p>
      </div>
    </div>

  </body>
</html>

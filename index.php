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
    <link rel="stylesheet" href="inc/header.css"/>
    <link rel="stylesheet" href="inc/footers.css"/>
  </head>

  <body>
    <div class="line1"></div>

    <?php
    include 'inc/header.php';
    ?>

    <div class="line2"></div>

    <div class="photo">
      <img src="assets/image/iam.jpg" />
    </div>

    <div>
      <h1 class="zagolovok">Говорова Екатерина</h1>
    </div>
      <table id="Iam" >
        <tr class="hight">
          <td class="shirina">
            <?php
              function TextArray () {     // функция изменения первого предложения     
                $text = 'Меня зовут Катя, мне 26 лет, и я живу в городе Магнитогорск. Училась в
                МГТУ имени Носова на педагога информатики и экономики. На данный момент
                работаю не по профессии, но два года я пропработала разработчиком
                электронных курсов в компании Sike. У меня есть кошка (Сакура) и щенок
                (Рокки). Рокки появился в моей семье недавно и ему всего 4 месяца. В
                свободное время люблю гулять, смотреть сериалы или просто отдыхать!';
                $str = 'Меня зовут Катя, мне 26 лет, и я живу в городе Магнитогорск.';
                $colors = 'brown';
                $exploded = explode('/', $str);
                  foreach ($exploded as $valye) {
                      $text = str_replace($valye, '<b style = "color: ' . $colors . '">' . $valye . '</b>', $text);
                  }
                echo $text;  
              }
              $NewTexArray = TextArray();
            ?>
          </td>

          <td class="shirina">
            
          <?php
            function ChangeColors () { // функция изменения цветов у второго текста
              $text2 = 'Мне очень понравилось, как прошли первые два урока. Все подробно и
              понятно объясняла Ирина. Надеюсь, в дальнейшем я буду схватывать все
              также легко!';
              $words = preg_split('/\s+/', $text2);
              $coloredText = '';
                foreach ($words as $index => $word) {
                  $class = $index % 2 == 0 ? 'even-word' : 'odd-word';
                  $coloredText .= "<span class='$class'>$word</span> ";
                }
              echo $coloredText;
            }
            $NewChangeText = ChangeColors();    
            ?>
                  <style>
                  .even-word { color: purple; }
                  .odd-word { color: green; }
                  </style>
          </td>
        </tr>
      </table>

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
    <div class="line3"></div>


        <?php
        include 'inc/footer.php';
        ?>
  </body>
</html>

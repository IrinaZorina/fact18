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
    <footer>
        <table class="table1">
            <tr>
                <td><p class="addres">Адрес проживания</p></td>
                <td><p class="addres">Контакная информация</td>
                <td><p class="addres">Социальные сети</td>
                <td rowspan="2">
                <?php
                    function DateTime () { // функция разности дат
                    $now = time();
                    $d2 = date("j. n. Y");
                    $my = '07. 07. 1998';
                    $myDate = strtotime("07.07.1998");
                    $datediff = $now - $myDate;

                    echo '<br><a style="color: Gold">' . $my . ' - моя дата </a> <br>';
                    echo '<br><a style="color: Gold">' . $d2 . ' - сегодняшняя дата </a> <br>';
                    echo '<br><a style="color: Gold">' . floor($datediff / (60 * 60 * 24)) . ' дней - разность между датами </a> <br>';
                    }
                    $NewDateTime = DateTime();
                    ?>
                </td>
            </tr>
            <tr>
                <td class="info">Челябинская область, город Магнитогорск, <br> улица Совесткая 176/1</td>
                <td class="info">+7(951)782-82-66
                    <br>
                    kiska.-1998@mail.ru
                </td>
                <td class="social">
                    <a class="social1" href="https://vk.com/kot_barry"><img src="../assets/image/vk.png" height="35px" width="35px"></a>
                    <a class="social2" href="#"><img src="../assets/image/inst.png" height="35px" width="35px"></a>
                    <a class="social3" href="https://t.me/kotbarry"><img src="../assets/image/telega.png" height="35px" width="35px"></a>
                </td>
            </tr>
        </table>
        <img class="paw" src="../assets/image/paw.png">
    </footer>
  </body>

  </html>
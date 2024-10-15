<?php
$time = date( format:"G");
if ($time >= 18 || $time < 9){
    $theme = "../assets/css/style_night.css";
    //<link rel="stylesheet" href="../assets/css/style.css">
   // echo "<link rel='stylesheet' href='style.css'>";
}
else{
    $theme = "../assets/css/style.css";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $theme; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header>
    <img src="../assets/image/rocket.png" alt="Логотип">
    <div class="argon">
    <a href="../../The_Periodic_table/html/Argon.html" class="argon_text">Аргон</a>
    </div>
</header>

<main>
    <div class="container">
        <div class="block_photo">
            <img src="../assets/image/oficial.jpg" alt="Фото">
        </div>
        <div class="full_info">
            <div class="fio">
                <h1>Потысьев Константин Игоревич</h1>
            </div>
            <div class="blocks_text">
                <div class="about_myself">
                    Работаю более года в ООО "Автор IT".
                        Моя основная работа заключается в внедрение и настройке Битрикс24 для различных клиентов,
                        помогая им повысить эффективность в бизнесе.<br>
                    Мое хобби - катание на эндуро-мотоцикле. Это помогаетмне отдохнуть от повседневной рутины,
                        получить заряд энергии и свежих впечатлений.<br>
                    Я всегда стремлюсь к покорению новых вершин для прокачки своих скилов.
                </div>
                <div class="review">
                    Информация подается в доступной для восприятия форме.
                        С введением новых терминов и элементов, их работа показывается на практике.<br>
                    Очень хорошо чувствуется профессионализм преподавательского состава.<br>
                    Очень рад, что оказался именно на вашем курсе.
                </div>
            </div>

        </div>
    </div>

    <section class="block_okb">
        <div class="block_okb_top_text"><h2>Основная четверка авиационных конструкторских бюро СССР</h2></div>
        <div class="block_okb_list">
            <div class="block_Tu">
                <img class="logo" src="../assets/image/aviation/Tu_logo.png" alt="ОКБ А.Н. Туполева"><br>
                ОКБ А.Н. Туполева основано 22 октября 1922 года
            </div>
            <div class="block_Il">
                <img class="logo" src="../assets/image/aviation/Il_logo.jpg" alt="ОКБ С.В. Ильюшина"><br>
                ОКБ С.В. Ильюшина основано 13 января 1933 года
            </div>
            <div class="block_Su">
                <img class="logo" src="../assets/image/aviation/Su_logo.png" alt="ОКБ П.О. Сухого"><br>
                ОКБ П.О. Сухого основано 29 июля 1939 года
            </div>
            <div class="block_MiG">
                <img class="logo" src="../assets/image/aviation/MiG_logo.jpg" alt="ОКБ А.И. Микояна и М.И. Гуревича"><br>
                ОКБ А.И. Микояна и М.И. Гуревича<br>
                основано 8 декабря 1939 года
            </div>
        </div>
    </section>
    <section class="block_aircraft">
        <div class="block_aircraft_top_text"><h2>Малоизвестные летательные аппараты</h2></div>
        <div class="block_aircraft_list">
            <div class="block_Tu-144">
                <img class="image_aircraft" src="../assets/image/aviation/Tu-144.jpg" alt="Ту-144"><br>
                Ту-144
            </div>
            <div class="block_MiG-8">
                <img class="image_aircraft" src="../assets/image/aviation/MiG-8.jpg" alt="МиГ-8"><br>
                МиГ-8
            </div>
            <div class="block_Su-31">
                <img class="image_aircraft" src="../assets/image/aviation/Su-31.jpg" alt="Су-31"><br>
                Су-31
            </div>
            <div class="block_Il-103">
                <img class="image_aircraft" src="../assets/image/aviation/Il-103.jpg" alt="Ил-103"><br>
                Ил-103
            </div>
        </div>
    </section>
</main>
</body>
</html>
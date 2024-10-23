<?php
session_start();
include 'AssetsForTheSiteWithBlocks_DayNight/header.php';
?>


<div class="PersonalInfoContainer">
    <div class="MyPhoto">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/avatars.jpg" alt="" width="400" height="400">
    </div>
    <div class="Name">
        <?php
        $name = 'Вячеслав Октябрьский';
        echo $name;
        ?>
    </div>
    <div class="Job">



        <?php

        $InfoAboutMyself = 'Специалист по операционной деятельности.
        Специалист по операционной деятельности
        Специалист по операционной деятельности
        Специалист по операционной деятельности ';
        $PositionOfFirstDot = mb_strpos($InfoAboutMyself, '.');

        $FirstSentence = mb_substr($InfoAboutMyself, 0, $PositionOfFirstDot + 2);


        ?>
        <div class ="FirstSentence" >
            <?php
            echo $FirstSentence;

            ?>
        </div>
            <?php
            function EditedInfoAboutMyself($InfoAboutMyself, $PositionOfFirstDot) {
                $NewInfoAboutMyself = mb_substr($InfoAboutMyself, $PositionOfFirstDot + 2, -1);
            return $NewInfoAboutMyself;
            }
            $EditedInfoAboutMyselfConst = EditedInfoAboutMyself($InfoAboutMyself, $PositionOfFirstDot);
            echo $EditedInfoAboutMyselfConst;
            ?>

        </div>
    <div class="AboutCourse">


<!--        <div class="OddWords">
            </div>
--!>
            <?php
            $InfoAboutCourse = 'Все понравилось. Все понравилось. Все понравилось. Все понравилось.
            Все понравилось. Все понравилось. Все понравилось. ';
            $ArrayOfWordsInInfoAboutCourse = explode(' ', $InfoAboutCourse);

            for ($i = 0; $i <= count($ArrayOfWordsInInfoAboutCourse); $i++) {
                if (($i % 2) == 0) {
                    echo "<span style='color:blue'> $ArrayOfWordsInInfoAboutCourse[$i] </span>";

                }
                else {
                echo "<span style='color:yellow'> $ArrayOfWordsInInfoAboutCourse[$i] </span>";
                }
            }

            ?>


        <?php

        function CountOddLetters($InfoAboutCourse) {
            $words = explode('.', $InfoAboutCourse);
            $OddWordsString ='';
            foreach ($words as $index => $word) {

                if ($index % 2 !== 0) {
                    $OddWordsString = $word;
                }
            }
            return $OddWordsString;
        }
        $CountOfOddLettersConst = CountOddLetters($InfoAboutCourse);
        echo $CountOfOddLettersConst;
        ?>
    </div>
    </div>
<div class="FirstHeadline">
    <?php
    $sights = 'Достопримечательности города Тюмень';
    echo $sights;
    ?>
</div>
<div class="containerOne">

    <div class="child1">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/cats1.png" alt="" width="200" height="200">
        <p>
            <?php
            $FirstPicNameFirstBlock = 'Бульвар Кошек';
            echo $FirstPicNameFirstBlock;
            ?>
        </p>
    </div>
    <div class="child2">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/LoversBridge1.jpeg" alt="" width="200" height="200">
        <p>

            <?php
            $SecondPicNameFirstBlock = 'Мост Влюбленных';
            echo $SecondPicNameFirstBlock;
            ?>
        </p>
    </div>
    <div class="child3">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/Church2.jpg" alt="" width="200" height="200">
        <p>

            <?php
            $ThirdPicNameFirstBlock = 'Спасская церковь';
            echo $ThirdPicNameFirstBlock;
            ?>

        </p>
    </div>
    <div class="child4">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/Circus1.jfif" alt="" width="200" height="200">
        <p>

            <?php
            $FourthPicNameFirstBlock = 'Цирк';
            echo $FourthPicNameFirstBlock;
            ?>
        </p>
    </div>

</div>
<div class="SecondHeadline">

    <?php
    $HeaderOfTheSecondBlock = 'Достопримечательности Тюменской Области';
    echo $HeaderOfTheSecondBlock;
    ?>
</div>
<div class="containerTwo">
    <div class="child5">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/Mammoth1.jpeg" alt="" width="400" height="250">
        <p>

            <?php
            $FirstPicNameSecondBlock = 'Скульптура "Мамонты Ханты-Манскийска"';
            echo $FirstPicNameSecondBlock;
            ?>
        </p>
    </div>
    <div class="child6">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/CremlinOfTobolsk.jpeg" alt="" width="400" height="250">
        <p>

            <?php
            $SecondPicNameSecondBlock = 'Тобольский Кремль';
            echo $SecondPicNameSecondBlock;
            ?>
        </p>
    </div>
    <div class="child7">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/Stella1.jpeg" alt="" width="400" height="250">
        <p>

            <?php
            $ThirdPicNameSecondBlock = 'Стелла памяти';
            echo $ThirdPicNameSecondBlock;
            ?>
        </p>
    </div>
    <div class="child8">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/SeaFront1.jpeg" alt="" width="400" height="250">
        <p>

            <?php
            $FourthPicNameSecondBlock = 'Набережная';
            echo $FourthPicNameSecondBlock;
            ?>
        </p>

    </div>

</div>

<?php

$_SESSION['sights'] = $sights;
$_SESSION['$FirstPicNameFirstBlock'] = $FirstPicNameFirstBlock;
$_SESSION['$SecondPicNameFirstBlock'] = $SecondPicNameFirstBlock;
$_SESSION['$ThirdPicNameFirstBlock'] = $ThirdPicNameFirstBlock;
$_SESSION['$FourthPicNameFirstBlock'] = $FourthPicNameFirstBlock;
$_SESSION['$FirstPicNameSecondBlock'] = $FirstPicNameSecondBlock;
$_SESSION['$SecondPicNameSecondBlock'] = $SecondPicNameSecondBlock;
$_SESSION['$ThirdPicNameSecondBlock'] = $ThirdPicNameSecondBlock;
$_SESSION['$FourthPicNameSecondBlock'] = $FourthPicNameSecondBlock;




?>

<?php
include 'AssetsForTheSiteWithBlocks_DayNight/footer.php';
?>





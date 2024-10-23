<?php
session_start();
?>

<footer>
<div class="footer">
Контакт: *-***-***-**-**
    <div class="footerPhoto">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/avatars.jpg" alt="" width="50" height="50">
    </div>
    <?php


    $sights = $_SESSION['sights'];
    $FirstPicNameFirstBlock = $_SESSION['$FirstPicNameFirstBlock'];
    $SecondPicNameFirstBlock = $_SESSION['$SecondPicNameFirstBlock'];
    $ThirdPicNameFirstBlock = $_SESSION['$ThirdPicNameFirstBlock'];
    $FourthPicNameFirstBlock = $_SESSION['$FourthPicNameFirstBlock'];
    $FirstPicNameSecondBlock = $_SESSION['$FirstPicNameSecondBlock'];
    $SecondPicNameSecondBlock = $_SESSION['$SecondPicNameSecondBlock'];
    $ThirdPicNameSecondBlock = $_SESSION['$ThirdPicNameSecondBlock'];
    $FourthPicNameSecondBlock = $_SESSION['$FourthPicNameSecondBlock'];

    $AllWordsCount = $sights . " " . $FirstPicNameFirstBlock . " " . $SecondPicNameFirstBlock
            . " " . $ThirdPicNameFirstBlock . " " . $FourthPicNameFirstBlock . " " . $FirstPicNameSecondBlock
            . " " . $SecondPicNameSecondBlock . " " . $ThirdPicNameSecondBlock . " " . $FourthPicNameSecondBlock;
        $arrayAllWords = explode(' ',$AllWordsCount);
        function AllWordsCountInBody($arrayAllWords) {
            return count($arrayAllWords);
        }

    $AmountOfWordsInBody = AllWordsCountInBody($arrayAllWords);
    echo 'Количество слов в блоке body: ' . $AmountOfWordsInBody;
    echo '<br><br>';

    ?>
    <?php


    function NumbOfVowel($LettersInArray) {

        $LowercaseVowel = 0;
        foreach ($LettersInArray as $key => $letter) {
            if ($letter == 'а' or  $letter == 'е' or  $letter == 'и' or  $letter == 'о' or  $letter == 'у' or
                $letter == 'ы' or $letter == 'э' or $letter == 'ю' or $letter ==  'я') {
                $LowercaseVowel++;
            }
        }
        return $LowercaseVowel;
    }
    $LettersInArray = mb_str_split($AllWordsCount);
    $LettersInArrayConst = NumbOfVowel($LettersInArray);
    echo 'Количество гласных букв в body = ' . $LettersInArrayConst;
    echo '<br><br>';
    ?>

    <?php

    function DaysBetweenDates($DateOfBirth, $currentDate) {
         $interval = $currentDate->diff($DateOfBirth);
        $daysDifference = $interval->days;
        return $daysDifference;
    }
    $DateOfBirth = new DateTime('1998-02-10');
    $currentDate = new DateTime();
    $AmountOfDaysBetweenDates = DaysBetweenDates($DateOfBirth, $currentDate);

    echo "Количество дней между Днем Рождения и текущей датой: " . $AmountOfDaysBetweenDates;
    ?>

</div>

</footer>
</body>

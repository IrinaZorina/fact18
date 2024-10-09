<footer>
<div class="footer">
Контакт: *-***-***-**-**
    <div class="footerPhoto">
        <img src="AssetsForTheSiteWithBlocks_DayNight/Photos/avatars.jpg" alt="" width="50" height="50">
    </div>
    <?php
    $AllWordsCount = $sights . " " . $FirstPicNameFirstBlock . " " . $SecondPicNameFirstBlock
        . " " . $ThirdPicNameFirstBlock . " " . $FourthPicNameFirstBlock . " " . $FirstPicNameSecondBlock
        . " " . $SecondPicNameSecondBlock . " " . $ThirdPicNameSecondBlock . " " . $FourthPicNameSecondBlock;
    $arrayAllWords = explode(' ',$AllWordsCount);
    echo 'Количество слов в body = ' . count($arrayAllWords);
    echo '<br><br>';
    ?>
    <?php

    $LettersInArray = mb_str_split($AllWordsCount);
    $LowercaseVowel = 0;
    foreach ($LettersInArray as $key => $letter) {
        if ($letter == 'а' or  $letter == 'е' or  $letter == 'и' or  $letter == 'о' or  $letter == 'у' or
            $letter == 'ы' or $letter == 'э' or $letter == 'ю' or $letter ==  'я') {
            $LowercaseVowel++;
        }
    }

    echo 'Количество гласных букв в body = ' . $LowercaseVowel;
    echo '<br><br>';
    ?>

    <?
    $DateOfBirth = new DateTime('1998-02-10');

    $currentDate = new DateTime();

    $interval = $currentDate->diff($DateOfBirth);


    $daysDifference = $interval->days;

    echo "Количество дней между Днем Рождения и текущей датой: " . $daysDifference;
    ?>

</div>

</footer>
</body>

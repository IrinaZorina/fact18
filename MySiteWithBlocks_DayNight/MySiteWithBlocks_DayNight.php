<?php
$time = date("G");
 if ($time > 8 and $time < 18) {
     readfile('MySiteWithBlocks_Day.html');
 }
else {
    readfile('MySiteWithBlocks_Night.html');
}

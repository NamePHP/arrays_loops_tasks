<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
 * рядов, а не 5.<br><br>
 * 1<br>
 * 22<br>
 * 333<br>
 * 4444<br>
 * 55555</p>
 */
$number = 1;
while ($number <= 9) {
    $num = 1;
    $elem = "";
    while ($num <= $number){
        $elem .= "$number";
        $num++;
    }
    echo "$elem <br>";
    $number++;
}
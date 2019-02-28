<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
 * xx<br>
 * xxxx<br>
 * xxxxxx<br>
 * xxxxxxxx<br>
 * xxxxxxxxxx</p>
 */
$x = 'xx';
$index = 1;
while ($index <= 5){
    echo "$x <br>";
    $x = $x . 'xx';
    $index++;
}
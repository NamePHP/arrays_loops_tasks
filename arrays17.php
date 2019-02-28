<?php
/**
 * Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 * месяц выведите жирным. Текущий месяц должен храниться в переменной $month
 */
$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December');
$month = 'February';
foreach ($arr as $elem){
    if($elem == $month){
        echo "<b>$month</b>\n";
    }else{
        echo "$elem\n";
    }
}

<?php
/**
 * Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
 * пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
 * 2, 3, т. е. 6
 */
$number = 123;
$arrayNumber = str_split($number);
$sum = 0;
foreach ($arrayNumber as $elem){
    $sum += $elem;
}
echo $sum;
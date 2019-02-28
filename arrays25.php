<?php
/**
 * Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами
 */
$arr = array(rand(1, 50),rand(1,16),rand(51,70));
print_r($arr);
echo '<br>';
$min = min($arr);
$max = max($arr);
echo "Min number: $min";
echo '<br>';
echo "Max number: $max";
echo '<br>';
foreach($arr as $keys => $value){
    if($value == $min){
        $arr[$keys] = $max;
    }
    if($value == $max){
        $arr[$keys] = $min;
    }
}
echo "New arrays : ";
print_r($arr);


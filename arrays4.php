<?php
/**
   Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
   помощью второго — столбец элементов
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
    echo "ключ: {$key}<br>";
}
echo '<br>';
foreach ($arr as $key => $value){
    echo "элемент: {$value}<br>";
}
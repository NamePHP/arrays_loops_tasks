<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * выходные дни следует вывести жирным
 */
$arr = array('ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ', 'НД');
foreach ($arr as $elem){
    if($elem == 'СБ' || $elem == 'НД'){
        echo "<b>$elem</b>\n";
    }else{
        echo "$elem\n";
    }
}
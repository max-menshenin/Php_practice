<?php
require_once 'input_array.php';

function getFullnameFromParts($surname, $name, $patronymic) {
    return $surname.' '.$name.' '.$patronymic;
}
function getPartsFromFullname($fullname){
    $array = explode (' ', $fullname); // вытаскиваем ФИО как отдельный массив
    $result['surname'] = $array[0];
    $result['name'] = $array[1];
    $result['$patronymic'] = $array[2];
    return $result;
}
function getShortName($fullname) {
    $array = getPartsFromFullname($fullname);
    $name =  mb_substr($array['name'], 0, 1).'.';
    return $array['surname'].' '.$name;
}
$fullname = 'Иванов Иван Иванович';
echo getShortName($fullname);
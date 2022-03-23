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
    $surname =  mb_substr($array['surname'], 0, 1);
    return $array['name'].' '.$surname.'.';
}
function getGenderFromName($fullname) {
    $gender = 0;
    $array = getPartsFromFullname($fullname);

    if (str_ends_with($array['$patronymic'], 'ич')) {
        $gender += 1;
    }


}




$fullname = 'Пащенко Владимир Александрович';
echo getShortName($fullname);
echo getGenderFromName($fullname);
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
    if ($array['$patronymic'].str_ends_with('ов', '') or $array['$patronymic'].str_ends_with('ич', '')){
        $gender += 1;
    }
    elseif ($array['surname'].str_ends_with('в','')){
        $gender += 1;
    }
    elseif ($array['name'].str_ends_with('н','')){
        $gender += 1;
    }
    elseif ($array['$patronymic'].str_ends_with('вна','')){
        $gender -= 1;
    }
    elseif ($array['name'].str_ends_with('а','')){
        $gender -= 1;
    }
    elseif ($array['surname'].str_ends_with('ва','')){
        $gender -= 1;
    }

    return $gender;
}




$fullname = 'Быстрая Юлия Сергеевна';
echo getShortName($fullname);
echo getGenderFromName($fullname);
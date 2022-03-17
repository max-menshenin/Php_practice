<?php

include "input_array.php";

function getPartsFromFullname($surname, $name, $patronymic) {
    $fullname = $surname.' '.$name.' '.$patronymic;
    return $fullname;
}

function getFullnameFromParts($fullname) {
    $fullname = 'test';
    return $fullname;
}

function getShortName($surname, $name, $mic) {
    $fullname = 'test';
    return $fullname;}

echo getPartsFromFullname('t', 'y', 'z');

<?php

require_once "input_array.php";

function getPartsFromFullname($surname, $name, $patronymic) {
    return $surname.' '.$name.' '.$patronymic;
}

function getFullnameFromParts($fullname) {
    $fullname = 'test';
    return $fullname;
}

function getPartsShortName($surname, $name, $patronymic) {
    $fullname = 'test';
    return $fullname;}

echo getPartsFromFullname('t', 'y', 'z');
$example_persons_array =;
echo $example_persons_array[0][0];
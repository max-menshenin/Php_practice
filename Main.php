<?php
include 'input_array.php';

function getFullnameFromParts($surname, $name, $patronymic) {
    return $surname.' '.$name.' '.$patronymic;
}

function getPartsFromFullname($fullname) {

}
echo $example_persons_array[0]['fullname'];
$str = 'surname name patronymic';
print_r(explode(' ', $str));
<?php

require "input_array.php";

function is_leap_year($year) {
    if ($year % 4 != 0) {
        return false;
    }
    elseif ($year % 100 == 0) {
        if ($year % 400 == 0) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return true;
    }
    
}
echo "test";

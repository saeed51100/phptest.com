<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates) {

        return true;
    }
}


$a = "24.53525235, 23.45235";



echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







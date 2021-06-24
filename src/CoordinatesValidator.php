<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {

        if (preg_match("/[0-9]*\.[0-9]+, [0-9]*\.[0-9]/", $coordinates)) {
            return "true";
        } else {
            return "false";
        }

    }
}


$a = "24.5352 5235, 23.45235";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







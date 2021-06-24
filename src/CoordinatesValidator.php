<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {

       return preg_match("/[0-9]*\.[0-9]+, [0-9]*\.[0-9]/", $coordinates);

    }
}


$a = "24.53525235, 23.45235";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







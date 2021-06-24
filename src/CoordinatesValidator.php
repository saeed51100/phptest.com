<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {
        $mmm = explode(" ", $coordinates);

        return $mmm[1];
        if ((preg_match("/[0-9]*\.[0-9]+, [0-9]*\.[0-9]/", $coordinates))
            && $mmm[0] < 10
            && $mmm[1] < 10) {
            return "true";
        } else {
            return "false";
        }

    }
}


$a = "2.53525235, 23.45235";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







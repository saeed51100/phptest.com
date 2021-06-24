<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {
        $mmm = explode(" ", $coordinates);
//        return rtrim ($mmm[0],",");

        if ((preg_match("/[0-9]*\.[0-9]+, [0-9]*\.[0-9]/", $coordinates))
            && ($mmm[0] >= -90 && $mmm[0] <= 90)
            && ($mmm[1] >= -180 && $mmm[1] <= 180)) {
            return "true";
        } else {
            return "false";
        }

    }
}


$a = "55.53525235, 23.45235";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







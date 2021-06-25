<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {
        $mmm = explode(" ", $coordinates);
//return rtrim ($mmm[0],",");
//var_dump($mmm[1]);
        if (/*(preg_match("/[0-9]*\.[0-9]+, [0-9]*\.[0-9]/", $coordinates))*/
            is_float($mmm[0])
            && is_float($mmm[1])
            && ($mmm[0] >= -90 && $mmm[0] <= 90)
            && ($mmm[1] >= -180 && $mmm[1] <= 180))
            return true;
        else
            return false;

    }
}


//$a = "-23, 25";
$a = "24.53525235, 23.45235";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







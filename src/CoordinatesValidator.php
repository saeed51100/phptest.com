<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates)
    {
        $mmm = explode(" ", $coordinates);
//return $mmm;
        $mmm[0] = rtrim($mmm[0], ",");
        if (
            is_numeric($mmm[0])
            && is_numeric($mmm[1])
            && ($mmm[0] >= -90 && $mmm[0] <= 90)
            && ($mmm[1] >= -180 && $mmm[1] <= 180)
        )
            return true;
        else
            return false;

    }
}


//$a = "-23, 25";
$a = "0, 1,2";


echo "<pre>";
print_r((new CoordinatesValidator)->isValidCoordinates($a));
echo "</pre>";







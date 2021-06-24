<?php

namespace saeed;


class CoordinatesValidator
{
    function isValidCoordinates($coordinates) {
        return true;
    }
}


$a = "NO3";



echo "<pre>";
print_r((new CoordinatesValidator)->parse_molecule($a));
echo "</pre>";







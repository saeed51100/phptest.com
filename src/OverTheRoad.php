<?php

namespace saeed;

class OverTheRoad
{

    function overTheRoad($address, $street)
    {
        for ($x = 0; $x < $street; $x++) {
            $ar1[$x] = 2 * $x + 1;
        }
        for ($x = 0; $x < $street; $x++) {
            $ar2[$x] = 2 * $x + 2;
        }

        $ar2 = array_reverse($ar2);

        array_search($ar1,$address)?



    }
}


echo "<pre>";
print_r((new OverTheRoad)->overTheRoad(2, 3));
echo "</pre>";

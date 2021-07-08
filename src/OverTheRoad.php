<?php

namespace saeed;

class OverTheRoad
{
    function overTheRoad($address, $street)
    {

        // My solution1:this is not working for big arrays.
        //     for ($x = 0; $x < $street; $x++) {
        //         $ar1[$x] = 2 * $x + 1;
        //     }
        //     for ($x = 0; $x < $street; $x++) {
        //         $ar2[$x] = 2 * $x + 2;
        //     }

        //     $ar2 = array_reverse($ar2);

        //     if (in_array($address, $ar1))
        //         return $ar2[array_search($address, $ar1)];
        //     else return $ar1[array_search($address, $ar2)];


        // My solution2: :)
        return $street * 2 - $address + 1;

    }


}


echo "<pre>";
print_r((new OverTheRoad)->overTheRoad(5, 6));
echo "</pre>";

<?php

namespace saeed;

class Findtheoddint
{

    function findIt(array $seq): int
    {
        // My solution:
        // $y = array_count_values($seq);
        // foreach ($y as $value) {
        //     if ($value % 2 !== 0)
        //         return array_search($value, $y);
        // }


        // Codewars solution:
        $nums = array_count_values($seq);
        foreach ($nums as $key => $val) {
            if ($val % 2) {
                return $key;
            }
        }


    }


}


echo "<pre>";
print_r((new Findtheoddint)->findIt([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]));
echo "</pre>";



//echo(new Findtheoddint)->generateShape(4);





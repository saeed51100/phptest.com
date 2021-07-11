<?php

namespace saeed;

class Findtheoddint
{

    function findIt(array $seq) /*: int*/
    {
        $y = array_count_values($seq);
//        return  $y;
        foreach ($y as $value) {
            if ($value % 2 !== 0)
                return [array_search($value)];

        }
    }

}


echo "<pre>";
print_r((new Findtheoddint)->findIt([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]));
echo "</pre>";



//echo(new Findtheoddint)->generateShape(4);





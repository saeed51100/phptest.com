<?php

namespace saeed;

class Findtheoddint
{

    function findIt(array $seq) /*: int*/
    {
        return array_count_values($seq);
        foreach ()
    }

}


echo "<pre>";
print_r((new Findtheoddint)->findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]));
echo "</pre>";



//echo(new Findtheoddint)->generateShape(4);





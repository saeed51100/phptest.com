<?php

namespace saeed;

class CountbyX
{

    function countBy($x, $n)
    {
        for ($x = 1; $x <= $n; $x++) {
            $result[$x] = $x * $n;
        }
        return $result;


    }

}

print_r((new CountbyX)->countBy(1, 7));



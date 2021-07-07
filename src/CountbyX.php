<?php

namespace saeed;

class CountbyX
{

    function countBy($x, $n)
    {
        for ($i = 0; $i < $n; $i++) {

            $result[$i] = ($i + 1) * $x;
        }
        return $result;


    }

}


echo "<pre>";
print_r((new CountbyX)->countBy(2, 5));
echo "</pre>";

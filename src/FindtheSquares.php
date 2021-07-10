<?php

namespace saeed;

class FindtheSquares
{
    function findsquares($num)
    {
        $a = intval($num / 2);
        $b = $num - $a;

        return $b * $b . "-" . $a * $a;


    }
}


echo "<pre>";
print_r((new FindtheSquares)->findsquares(9));
echo "</pre>";




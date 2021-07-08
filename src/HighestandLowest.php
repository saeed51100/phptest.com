<?php

namespace saeed;

class HighestandLowest
{
    function highAndLow($numbers)
    {
        $ar1 = explode(" ", $numbers);

        sort($ar1);

        foreach ($numbers as $key => $val) {
            $ar1[$key] = $val;
        }
        return $ar1;

    }

}


echo "<pre>";
print_r((new HighestandLowest)->highAndLow("8 3 -5 42 -1  0 0 -9 4 7 4 -4"));
echo "</pre>";

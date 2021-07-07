<?php

namespace saeed;

class OverTheRoad
{

    function past($h, $m, $s)
    {
        // My solution:
        if ($h >= 0 && $h <= 23 && $m >= 0 && $m <= 59 && $s >= 0 && $s <= 59) {
            $result = ($h * 3600 + $m * 60 + $s) * 1000;
        } else return "Enter a valid time!";

        return $result;


        // Codewars solution1:
        // return (($h * 60 * 60) + $m * 60 + $s) * 1000;


        // Codewars solution2:
        // return strtotime("$h:$m:$s", 0) * 1000;

    }
}


echo "<pre>";
print_r((new OverTheRoad)->past(2, 8, 20));
echo "</pre>";

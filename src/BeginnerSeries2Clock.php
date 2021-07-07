<?php

namespace saeed;

class BeginnerSeries2Clock
{

    function past($h, $m, $s) {
        if ($h)
            0 <= h <= 23
            0 <= m <= 59
            0 <= s <= 59
        return 6;
    }
}


echo "<pre>";
print_r((new BeginnerSeries2Clock)->countBy(2, 5, 20));
echo "</pre>";

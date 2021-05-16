<?php

namespace saeed;

class Arraydiff
{
    public function arrayDiff($a, $b) {
        // your code here
        return array_diff($a, $b);
    }
}

// The Echo command does not have the ability to display array values.
// Use print_r instead of echo for print array.
print_r((new Arraydiff)->arrayDiff([1,2,2,2,3],[2]));








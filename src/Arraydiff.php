<?php

namespace saeed;

class Arraydiff
{
    public function arrayDiff($a, $b) {
        // use array_values for reset indexes in array_diff result.
        // https://stackoverflow.com/questions/3109098/how-to-reset-indexes-in-array-diff-result
        return array_values(array_diff($a, $b));
    }
}

// The Echo command does not have the ability to display array values.
// Use print_r instead of echo for print array.
echo "<pre>";
print_r((new Arraydiff)->arrayDiff([1,2,2,2,3,3],[2]));
echo "</pre>";







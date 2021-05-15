<?php

namespace saeed;

class diff
{
    public function arrayDiff($a, $b) {
        // your code here
        return array_diff($a, $b);
    }
}

echo (new diff())->arrayDiff([1,2,2,2,3],[2]);











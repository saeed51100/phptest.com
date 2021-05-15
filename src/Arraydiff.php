<?php

namespace saeed;

class Arraydiff
{
    public function arrayDiff($a, $b) {
        // your code here
        return array_diff($a, $b);
    }
}



echo (new Arraydiff)->arrayDiff(['1','2','2','2','3'],['2']);









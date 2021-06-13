<?php

namespace saeed;


use phpDocumentor\Reflection\Types\This;

class MatrixAddition
{
    function myfunction($ar1, $ar2)
    {
        // https://stackoverflow.com/questions/6086267/how-to-merge-two-arrays-by-summing-the-merged-values?noredirect=1&lq=1
        $sums = array();
        foreach (array_keys($ar1 + $ar2) as $key) {
            $sums[$key] = (isset($ar1[$key]) ? $ar1[$key] : 0) + (isset($ar2[$key]) ? $ar2[$key] : 0);
        }
        return $sums;


    }


}

//$a = array(10, 2, 5, 10, 0);
//$b = array(1, 20, 11, 8, 3);

$a = array(10, 2, 5, 10, 0);
$b = array(1, 20, 11, 8, 3);

echo "<pre>";
print_r((new MatrixAddition)->myfunction($a, $b));
echo "</pre>";





<?php

namespace saeed;


use phpDocumentor\Reflection\Types\This;

class MatrixAddition
{
    function matrix_addition($ar1, $ar2)
    {
        $result = array();
        for ($row = 0; $row < count($ar1); $row++) {
            for ($col = 0; $col < count($ar1[0]); $col++) {

                $result[$row][$col] = ($ar1[$row][$col]) + ($ar2[$row][$col]);


            }

        }


        return $result;

    }


}



$a = array(
    [10, 3,5],
    [2, 4,6],
    [2, 4,9],
    );

$b = array(
    [1, 2,5],
    [3, 4,3],
    [3, 4,6],
    );


echo "<pre>";
print_r((new MatrixAddition)->matrix_addition($a, $b));
echo "</pre>";







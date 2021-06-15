<?php

namespace saeed;


use phpDocumentor\Reflection\Types\This;

class MatrixAddition
{
    function myfunction($ar1, $ar2)
    {

//        for ($row = 0; $row < 5; $row++) {
//            echo "<p><b>Row number $row</b></p>";
//            echo "<ul>";
//            for ($col = 0; $col < 3; $col++) {
//                print_r($ar1[$row][$col]) ;
//            }
//
//        }
//        function searchForId($id, $array)
//        {
//            foreach ($array as $key => $val) {
//                if ($val['uid'] === $id) {
//                    print_r($key);
//                }
//            }
//            return null;
//        }


        for ($row = 0; $row < count($ar1); $row++) {
            for ($col = 0; $col < count($ar1); $col++) {

                echo "<pre>";
                echo $row,"," ,$col,"  => ";
                print_r($ar1[$row][$col]);
                echo "</pre>";

            }

        }


        return null;

    }


}

//$a = array(10, 2, 5, 10, 0);
//$b = array(1, 20, 11, 8, 3);

$a = array(
    [10, 3],
    [2, 4],
    [5, 2],
    [10, 4],
    [0, 1]);

$b = array(
    [1, 2],
    [3, 4],
    [5, 6],
    [8, 10],
    [9, 1]);


echo "<pre>";
print_r((new MatrixAddition)->myfunction($a, $b));
echo "</pre>";







<?php

namespace saeed;


use phpDocumentor\Reflection\Types\This;

class MatrixAddition
{
    function myfunction($ar1)
    {

        for ($row = 0; $row < 5; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $ar1[$row][$col] . "</li>";
            }
            echo "</ul>";
        }


    }


}

//$a = array(10, 2, 5, 10, 0);
//$b = array(1, 20, 11, 8, 3);

$a = array([
    [10, 3],
    [2, 4],
    [5, 2],
    [10, 4],
    [0, 1]]);

echo "<pre>";
print_r((new MatrixAddition)->myfunction($a));
echo "</pre>";





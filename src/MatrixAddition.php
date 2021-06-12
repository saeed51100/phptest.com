<?php

namespace saeed;


class MatrixAddition
{
    public function matrix_addition(array $a, array $b)
    {

        for ($i = 0; $i < $rows; $i = $i + 1) {
            for ($j = 0; $j < $cols; $j = $j + 1) {
                $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
                echo $c[$i][$j] . " ";
            }
            echo "<br>";


        }


    }

}

echo "<pre>";
   print_r((new MatrixAddition)->matrix_addition() ("London", $data1));
echo "</pre>";


<?php


function countBy($x, $n)
{
    // My solution:
    for ($i = 0; $i < $n; $i++) {

        $result[$i] = ($i + 1) * $x;
    }
    return $result;


    // Codewars solution1:
    // return range($x, $n * $x, $x);


    // Codewars solution2:
    // $result = [$x];
    // for ($i = 1; $i < $n; $i++) {
    //     array_push($result, $x * ($i + 1));
    // }
    // return $result;


}


echo "<pre>";
print_r(countBy(2, 5));
echo "</pre>";

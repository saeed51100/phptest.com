<?php

function highAndLow($numbers)
{
//     My solution:
     $ar1 = explode(" ", $numbers);
     sort($ar1);
     foreach ($ar1 as $key => $val) {
         $ar1[$key] = $val;
     }
     return $ar1[count($ar1) - 1] . " " . $ar1[0];


    // Codewars solution:
//    $a = explode(' ', $numbers);
//    return max($a) . " " . min($a);


}


echo (highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));

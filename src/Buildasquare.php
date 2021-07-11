<?php

namespace saeed;

class Buildasquare
{

    function generateShape($int)
    {
        // My solution:
        //     for ($x = 0; $x < $int; $x++) {
        //         for ($y = 0; $y < $int; $y++) {
        //             $ar1[$y] = "+";

        //         }

        //         $ar2[$x] = (implode($ar1)) . "\n";

        //     }
        //     $a = implode($ar2);


        // Remove trailing newline.
        // https://stackoverflow.com/questions/3530099/remove-trailing-newline
        //     return preg_replace('/\n$/', '', $a);


        // Codewars solution:
        return trim(str_repeat(str_repeat('+', $int) . "\n", $int));

    }


}


echo "<pre>";
print_r((new Buildasquare)->generateShape(4));
echo "</pre>";



//echo(new Buildasquare)->generateShape(4);





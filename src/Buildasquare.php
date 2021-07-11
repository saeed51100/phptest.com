<?php

namespace saeed;

class Buildasquare
{
    function generateShape($int)
    {

        for ($x = 0; $x < $int; $x++) {
            for ($y = 0; $y < $int; $y++) {
                $ar1[$y] = "+";

            }
//            echo implode($ar1);
            $ar2[$x] = (implode($ar1)) . "\n";

        }
        return implode($ar2);

    }

}


echo "<pre>";
print_r((new Buildasquare)->generateShape(4));
echo "</pre>";



//echo(new Buildasquare)->generateShape(4);





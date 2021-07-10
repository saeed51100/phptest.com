<?php

namespace saeed;

class Buildasquare
{
    function generateShape($int)
    {
        for ($x = 0; $x < $int; $x++) {
            for ($y = 0; $y < $int; $y++) {
                echo "+";
            }
            echo "\n";
        }



    }

}


echo "<pre>";
print_r((new Buildasquare)->generateShape(4));
echo "</pre>";




<?php

namespace saeed;

class OverTheRoad
{

    function overTheRoad($address, $street){
        for ($x = 0; $x < $street ; $x++) {
            $ar1[$x] = ($x+1)*2-1 ;
        }
        for ($x = 0; $x < $street ; $x++) {
            $ar1[$x] = ($x+1)*2 ;
        }


        return $ar1;
    }}


echo "<pre>";
print_r((new OverTheRoad)->overTheRoad(2, 3));
echo "</pre>";

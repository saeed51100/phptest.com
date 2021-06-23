<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula)
    {
        $nnn = preg_replace_callback('/[a-zA-Z]|\(|\)|[0-9]/', function ($matches) {
            return "  " . $matches[0];
        }, $formula);
        $yyy = ltrim($nnn);
        $mmm = explode("  ", $yyy);

//        return $mmm;


        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {

                $result[$row][0] = ($ar1[$row][$col]) + ($ar2[$row][$col]);
                $result[$row][1] = ($ar1[$row][$col]) + ($ar2[$row][$col]);

            }

        }


    }

}


$a = "Fe(NO3)2";
//$a = "K4[ON(SO3)2]2";


echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula)
    {
        $nnn = preg_replace_callback('/[A-Z]|[A-Z]+[a-z]|\(|\)|[0-9]/', function ($matches) {
            return "  " . $matches[0];
        }, $formula);
        $yyy = ltrim($nnn);
        $mmm = explode("  ", $yyy);

//        return $mmm;


        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {


                $result[$row][0] = ($mmm[$row]);

                if (3 > 7) {
                    $zarib = 3;
                } else {
                    $zarib = 9;
                }

                $result[$row][1] = ($zarib);

            }

        }
        return $result;


    }

}


$a = "Fe(NO3)2";
//$a = "K4[ON(SO3)2]2";


echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







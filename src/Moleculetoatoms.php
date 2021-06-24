<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula)
    {
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!
        // this kata is not complete!

        $nnn = preg_replace_callback('/[A-Z]|[A-Z]+[a-z]|\(|\)|[0-9]/', function ($matches) {
            return "  " . $matches[0];
        }, $formula);
        $yyy = ltrim($nnn);
        $mmm = explode("  ", $yyy);

//        return $mmm;


        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {


                $result[$row][0] = ($mmm[$row]);

                $zarib = 3;
                if (3 > 2) {
                    $zarib = 4;
                } else {
                    $zarib = 9;
                }

                $result[$row][1] = ($zarib);

            }

        }
        return $result;


    }

}


$a = "NO3";
//$a = "Fe(NO3)2";
//$a = "K4(ON(SO3)2)2";


echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







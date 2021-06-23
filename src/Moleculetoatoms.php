<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula): array
    {
        $nnn = preg_replace_callback('/[a-zA-Z]|\(|\)|[0-9]/', function ($matches) {
            return "  " . $matches[0];
        }, $formula);
        $yyy = ltrim($nnn);
        return explode("  ", $yyy);

    }

}


$a = "Fe(NO3)2";
//$a = "K4[ON(SO3)2]2";


echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







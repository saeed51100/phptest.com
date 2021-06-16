<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula): array {
        $nnn = preg_replace_callback('/[a-zA-Z]+:/', function ($matches) {
            return "  " . $matches[0];
        }, $formula);

    }

}


$a = "Fe(NO3)2";




echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







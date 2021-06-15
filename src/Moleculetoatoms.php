<?php

namespace saeed;


class Moleculetoatoms
{
    function parse_molecule(string $formula): array {
        // Do your science here :)
    }

}


$a = "Mg(OH)2";




echo "<pre>";
print_r((new Moleculetoatoms)->parse_molecule($a));
echo "</pre>";







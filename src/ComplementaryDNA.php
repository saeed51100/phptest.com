<?php

namespace saeed;

class ComplementaryDNA
{
    function DNA_strand($dna)
    {
        // My solution:
        // $ar1 = str_split($dna);
        // for ($x = 0; $x < strlen($dna); $x++) {
        //     if ($ar1[$x] == "A") $ar1[$x] = "T";
        //     elseif ($ar1[$x] == "T") $ar1[$x] = "A";
        //     elseif ($ar1[$x] == "C") $ar1[$x] = "G";
        //     elseif ($ar1[$x] == "G") $ar1[$x] = "C";
        // }

        // return implode($ar1);



        // Codewars solution1:






    }


}


echo "<pre>";
print_r((new ComplementaryDNA)->DNA_strand("ACGA"));
echo "</pre>";

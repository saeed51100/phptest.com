<?php

function DNA_strand($dna)
{

//    $ar1 = str_split($dna);
//    for ($x = 0; $x < strlen($dna); $x++) {
//        if ($ar1[$x] == "A") $ar1[$x] = "T";
//        elseif ($ar1[$x] == "T") $ar1[$x] = "A";
//        elseif ($ar1[$x] == "C") $ar1[$x] = "G";
//        elseif ($ar1[$x] == "G") $ar1[$x] = "C";
//    }
//
//    return implode($ar1);


//     Codewars solution1:
//    return strtr($dna, ['A' => 'T', 'T' => 'A', 'C' => 'G', 'G' => 'C']);


    // Codewars solution2:
    return strtr($dna, 'ACGT', 'TGCA');


}

echo(DNA_strand("ACTA"));

<?php

namespace saeed;

use phpDocumentor\Reflection\Types\This;

class Movesinsquaredstrings3
{

    function diag1Sym($s)
    {

        $a = explode("\n", $s);
        foreach ($a as $key => $value) {
            foreach ($a as $keya => $valuea) {
                $zz1[$key][$keya] = $a[$keya][$key];

            }
        }


        foreach ($zz1 as $value) {
            $output[] = implode('', $value);
        }

        return implode("\n", $output);


    }


    function rot90Clock($s)
    {
        $s = $this->diag1Sym($s);
        return implode("\n", array_reverse(explode("\n", strrev($s))));
    }


    function selfieAndDiag1($s)
    {
        $a = explode("\n", $s);

        $imp = explode("\n", $this->diag1Sym($s));
        foreach ($a as $key => $value) {
            $output2[$key] = $a[$key] . "|" . $imp[$key];
        }

        return implode("\n", $output2);
    }


    // Codewars function:
    function oper($fct, $s)
    {
        return $this->$fct($s);
    }


}

echo "<pre>";
print_r((new Movesinsquaredstrings3)->oper('selfieAndDiag1', "abcd\nefgh\nijkl\nmnop"));
echo "</pre>";

//print_r((new Movesinsquaredstrings3)->sortArray([5, 3, 2, 8, 1, 4]));



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

        return implode("\n", array_reverse(explode("\n", strrev($s))));

    }

    function selfieAndDiag1($s)
    {
        $a = explode("\n", $s);
        return $a;

    }

    // My function1: ( Not working in Codewars )
    function oper($fct, $s)
    {
        if ($fct == 'diag1Sym')
            return $this->diag1Sym($s);
        elseif ($fct == 'rot90Clock')
            return $this->rot90Clock($s);
        else
            return $this->selfieAndDiag1($s);
    }


    // My function2: ( Not working in Codewars )
    // https://stackoverflow.com/questions/32053694/php-how-to-solve-error-using-this-when-not-in-object-context
    // function oper($fct, $s)
    // {
    // if ($fct == 'horMirror')
    //       return Movesinsquaredstrings3::horMirror($s);
    // else
    //     return Movesinsquaredstrings3::vertMirror($s);
    // }


    // Codewars function:
    // function oper($fct, $s)
    // {
    //     return $fct($s);
    // }


}

echo "<pre>";
print_r((new Movesinsquaredstrings3)->oper('selfieAndDiag1', "abcd\nefgh\nijkl\nmnop"));
echo "</pre>";

//print_r((new Movesinsquaredstrings3)->sortArray([5, 3, 2, 8, 1, 4]));








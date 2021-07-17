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
                $zz1[$keya][$valuea] = $a[$key][$value];

            }
        }
//        return strrev($s);
    }


    function rot90Clock($s)
    {

        $z = explode("\n", ($s));
        $dots = str_repeat(".", count($z));


        foreach ($z as $valuel) {
            $zz1[] = ($valuel . $dots);
        }


        $aa = explode("\n", strrev($s));
        foreach ($aa as $valuel) {
            $zz2[] = ($dots . $valuel);
        }
        return implode("\n", $zz1) . "\n" . implode("\n", $zz2);

    }

    function selfieAndDiag1($s)
    {
        // your code
        return 9;
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
print_r((new Movesinsquaredstrings3)->oper('diag1Sym', "abcd\nefgh\nijkl\nmnop"));
echo "</pre>";

//print_r((new Movesinsquaredstrings3)->sortArray([5, 3, 2, 8, 1, 4]));








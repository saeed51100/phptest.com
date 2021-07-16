<?php

namespace saeed;

use phpDocumentor\Reflection\Types\This;

class Movesinsquaredstrings2
{

    function rot($s)
    {
        // How to explode a multi-line string?
        // https://stackoverflow.com/questions/6162912/how-to-explode-a-multi-line-string
        $aa = implode("\n", array_reverse(explode("\n", strrev($s))));
        return implode("\n", array_reverse(explode("\n", $aa)));


    }

    function str2rev($w)
    {
        $t = str_split($w);
        $u = array_slice($t, 2);
        $v = array_reverse($u);
        array_splice($t, 2, 2, $v);
        return implode($t);
    }

    function selfieAndRot($s)
    {
//        $s = "abcd";
//        return strrev($s);
//        return $this->str2rev($s);

//        return implode("\n", array_reverse(explode("\n", strrev($s))));
//        return $s;

        $z = explode("\n", ($s));
        foreach ($z as $valuel){

        }

    }


    // My function1: ( Not working in Codewars )
    function oper($fct, $s)
    {
        if ($fct == 'rot')
            return $this->rot($s);
        else
            return $this->selfieAndRot($s);
    }


    // My function2: ( Not working in Codewars )
    // https://stackoverflow.com/questions/32053694/php-how-to-solve-error-using-this-when-not-in-object-context
    // function oper($fct, $s)
    // {
    // if ($fct == 'horMirror')
    //       return Movesinsquaredstrings2::horMirror($s);
    // else
    //     return Movesinsquaredstrings2::vertMirror($s);
    // }


    // Codewars function:
    // function oper($fct, $s)
    // {
    //     return $fct($s);
    // }


}

echo "<pre>";
print_r((new Movesinsquaredstrings2)->oper('selfieAndRot', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"));
echo "</pre>";

//print_r((new Movesinsquaredstrings2)->sortArray([5, 3, 2, 8, 1, 4]));








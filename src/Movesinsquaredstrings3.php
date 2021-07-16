<?php

namespace saeed;

use phpDocumentor\Reflection\Types\This;

class Movesinsquaredstrings3
{

    function rot($s)
    {
        // My function:
        // return implode("\n", (explode("\n", strrev($s))));

        // Codewars function:
        return strrev($s);
    }


    function selfieAndRot($s)
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
print_r((new Movesinsquaredstrings3)->oper('rot', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"));
echo "</pre>";

//print_r((new Movesinsquaredstrings3)->sortArray([5, 3, 2, 8, 1, 4]));








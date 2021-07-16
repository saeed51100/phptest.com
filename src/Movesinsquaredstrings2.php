<?php

namespace saeed;

class Movesinsquaredstrings2
{

    function rot($s)
    {
        // How to explode a multi-line string?
        // https://stackoverflow.com/questions/6162912/how-to-explode-a-multi-line-string
        $aa = implode("\n", array_reverse(explode("\n", strrev($s))));
        return implode("\n", array_reverse(explode("\n", $aa)));


    }

    function selfieAndRot($s)
    {
        $s = "abcd";
        return  strrev($s);


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
print_r((new Movesinsquaredstrings2)->oper('rot', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"));
echo "</pre>";

//print_r((new Movesinsquaredstrings2)->sortArray([5, 3, 2, 8, 1, 4]));








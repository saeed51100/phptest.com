<?php

namespace saeed;

class Movesinsquaredstrings1
{

    function vertMirror($s)
    {

    }

    function horMirror($s)
    {
        return implode(' ', array_reverse(explode(' ', strrev($s)))) ;

//        return  strrev($s) ;
//        return  ($s) ;
    }

    function oper($fct, $s)
    {
        return $this->horMirror($s);
    }


}

echo "<pre>";
print_r((new Movesinsquaredstrings1)->oper('horMirror',"hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"));
echo "</pre>";

//print_r((new Movesinsquaredstrings1)->sortArray([5, 3, 2, 8, 1, 4]));








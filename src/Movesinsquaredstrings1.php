<?php

namespace saeed;

class Movesinsquaredstrings1
{

    function vertMirror($s)
    {
        // How to explode a multi-line string?
        // https://stackoverflow.com/questions/6162912/how-to-explode-a-multi-line-string
        return implode("\n", array_reverse(explode("\n", strrev($s))));

    }

    function horMirror($s)
    {

        return implode("\n", array_reverse(explode("\n", $s)));

    }

    function oper($fct, $s)
    {
        if ($fct == 'horMirror')
            return $this->horMirror($s);
        else
            return $this->vertMirror($s);

    }


}

echo "<pre>";
print_r((new Movesinsquaredstrings1)->oper('horMirror', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"));
echo "</pre>";

//print_r((new Movesinsquaredstrings1)->sortArray([5, 3, 2, 8, 1, 4]));








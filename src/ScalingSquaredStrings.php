<?php

namespace saeed;

class ScalingSquaredStrings
{
    function scale($s, $k, $n)
    {

//        $ar1 = explode("\n", $s);
//        $st = str_split($ar1[0]);

        function countLetters($matches, $k): string
        {
            return $matches[0] . '(' . strlen($matches[0]) . ')';
//            return str_repeat($matches[0],$k);
        }


        return preg_replace_callback('/[CG]/', 'countLetters',$s);


    }
}


echo "<pre>";
print_r((new ScalingSquaredStrings)->scale("CG\nla", 2, 3));
echo "</pre>";

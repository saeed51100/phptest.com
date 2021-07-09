<?php

namespace saeed;

class ScalingSquaredStrings
{
    function scale($s, $k, $n)
    {

//        $ar1 = explode("\n", $s);
//        $st = str_split($ar1[0]);


//        return str_repeat($s,$k);

        // use ($k) ????
        // Passing additional arguments to preg_replace_callback using PHP 5.2.6
        //https://stackoverflow.com/questions/9550769/passing-additional-arguments-to-preg-replace-callback-using-php-5-2-6?noredirect=1&lq=1
        return preg_replace_callback('/[a-zA-Z]+/',
            function ($matches) use ($k) {
//                return $matches[0] . '(' . strlen($matches[0]) . ')';
                return str_repeat($matches[0], $k);
            },
            $s);




    }
}


echo "<pre>";
print_r((new ScalingSquaredStrings)->scale("CG\nla", 3, 3));
echo "</pre>";

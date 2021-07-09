<?php

namespace saeed;

class ScalingSquaredStrings
{
    function scale($s, $k, $n)
    {


//        return str_repeat($s,$k);

        // use ($k) ????
        // Passing additional arguments to preg_replace_callback using PHP 5.2.6
        //https://stackoverflow.com/questions/9550769/passing-additional-arguments-to-preg-replace-callback-using-php-5-2-6?noredirect=1&lq=1
        $yyy = preg_replace_callback('/[a-zA-Z]/',
            function ($matches) use ($k) {
                return str_repeat($matches[0], $k);
            },
            $s);

        return preg_replace_callback('/[a-zA-Z]+/',
            function ($matches) use ($n) {
                return str_repeat($matches[0], $n);
            },
            $yyy);


    }
}


echo "<pre>";
print_r((new ScalingSquaredStrings)->scale("CG\nla", 3, 8));
echo "</pre>";

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
            return str_repeat($matches[0],$k);
            },
            $s);


//        $input = $s;
//        $pattern = '/[a-z0-9\.]+/i';
//        $result = preg_replace_callback($pattern, function ($matches) {
//            return $matches[0] . '(' . strlen($matches[0]) . ')';
//        }, $input);
//        echo $result;


    }
}


echo "<pre>";
print_r((new ScalingSquaredStrings)->scale("CG\nla", 2, 3));
echo "</pre>";

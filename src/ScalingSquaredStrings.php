<?php

namespace saeed;

class ScalingSquaredStrings
{
    function scale($s, $k, $n)
    {


        // use ($k) ????
        // Passing additional arguments to preg_replace_callback using PHP 5.2.6
        //https://stackoverflow.com/questions/9550769/passing-additional-arguments-to-preg-replace-callback-using-php-5-2-6?noredirect=1&lq=1
        $yyy = preg_replace_callback('/[a-zA-Z]/',
            function ($matches) use ($k) {
                return str_repeat($matches[0], $k);
            },
            $s);
//        return $s;
//        return $yyy;


        $zzz = preg_replace_callback('/[a-zA-Z]+/',
            function ($matches) use ($n) {
                return str_repeat(($matches[0] . "\n"), $n);
            },
            $yyy);

       // How do I remove blank lines from text in PHP?
       // https://stackoverflow.com/questions/709669/how-do-i-remove-blank-lines-from-text-in-php
        return preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $zzz);


    }
}


echo "<pre>";
print_r((new ScalingSquaredStrings)->scale("abcd\nefgh\nijkl\nmnop", 2, 3));
echo "</pre>";


//echo(new ScalingSquaredStrings)->scale("abcd\nefgh\nijkl\nmnop", 2, 3);


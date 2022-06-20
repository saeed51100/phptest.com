<?php



    function spinWords(string $str)
    {

        // preg_replace example:
        // return preg_replace('/(\b\w{5,}\b)+/i', "1111111", $str);


        // preg_replace_callback example: (My solution)
        // return preg_replace_callback('/(\b\w{5,}\b)+/i',
        //     function ($match) {
        //         return strrev($match[0]);
        //     }, $str);


        // codewars solution:
        return preg_replace_callback('/\w{5,}/', function ($matches) {
            return strrev($matches[0]);
        }, $str);




}

echo spinWords(" is currently unable to handle this request.");


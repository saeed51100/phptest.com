<?php

namespace saeed;


class Stopgninnip
{

    public function spinWords(string $str)
    {

        // preg_replace example:
        // return preg_replace('/(\b\w{5,}\b)+/i', "1111111", $str);


        // preg_replace_callback example:
        return preg_replace_callback('/(\b\w{5,}\b)+/i', function ($match) {
            return strrev($match[0]);
        }, $str);


    }

}

echo (new Stopgninnip)->spinWords(" is currently unable to handle this request.");


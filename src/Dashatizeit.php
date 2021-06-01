<?php

namespace saeed;


class Dashatizeit
{

    public function dashatize(int $num): string {
        return preg_replace_callback('/\w{5,}/', function ($matches) {
            return strrev($matches[0]);
        }, $str);
    }

}

echo (new Dashatizeit)->dashatize(" is currently unable to handle this request.");


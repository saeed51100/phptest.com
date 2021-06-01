<?php

namespace saeed;

class Dashatizeit
{

    public function dashatize(int $num): string
    {
        return preg_replace_callback('/\d/', function ($matches) {
            return !($matches[0] % 2 == 0) ? "-".$matches[0]."-" :$matches[0];
        }, $num);
    }

}

echo (new Dashatizeit)->dashatize(274);



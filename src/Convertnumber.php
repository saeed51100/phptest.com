<?php
namespace saeed;


class Convertnumber
{

    public function reverse($c): string
    {
        return implode(' ', array_reverse(explode(' ', strrev($c)))) ;
    }
}

echo (new Convertnumber)->reverse("ehT kciuq nworb xof spmuj revo eht yzal .god");


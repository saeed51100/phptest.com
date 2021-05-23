<?php
namespace saeed;


class Reversewords
{

    public function reverse($c): string
    {
        return strrev($c);
    }
}

echo (new Reversewords)->reverse("ehT kciuq nworb xof spmuj revo eht yzal .god");


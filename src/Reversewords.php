<?php
namespace saeed;


class Reversewords
{

    public function reverse($c): string
    {
        return strrev($c);
    }
}

echo (new Reversewords)->reverse("Hello World!");


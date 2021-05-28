<?php
namespace saeed;


class Upperall
{

    public function caps($c): string
    {
        return ucwords($c);
    }
}

echo (new Upperall)->caps("75");


<?php
namespace saeed;


use phpDocumentor\Reflection\Types\String_;

class Convertnumber
{

    public function digitize($c)
    {
        return explode('-', $c);
    }
}

echo (new Convertnumber)->digitize("6-845-7");


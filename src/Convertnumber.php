<?php
namespace saeed;


use phpDocumentor\Reflection\Types\String_;

class Convertnumber
{

    public function digitize($c)
    {
        return array_reverse(str_split($c));
    }
}

echo "<pre>";
print_r((new Convertnumber)->digitize ("68457")) ;
echo "</pre>";

<?php
namespace saeed;


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

<?php
namespace saeed;

class Exclamation2
{
    public function remove(string $s): string {
        // Coding and coding ...
        $string = preg_replace('/!+$/', '', $string);
    }
}

//echo (new Exclamation2())->periodIsLate(2016-07-13,2015-07-15,5);











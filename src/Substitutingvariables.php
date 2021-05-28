<?php
namespace saeed;


class Substitutingvariables
{

    public function solution($c): string
    {   // I find this:
        // https://www.delftstack.com/howto/php/how-to-properly-format-a-number-with-leading-zeros-in-php/
        // return "Value is " . str_pad($c, 5, "0", STR_PAD_LEFT);

        return sprintf("Value is %05d",$c); // This in codewars.

    }
}

echo (new Substitutingvariables)->solution("5");


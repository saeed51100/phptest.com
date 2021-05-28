<?php

namespace saeed;


class Substitutingvariables
{

    public function solution($c): string
    {
        return "value is " . str_pad($c, 5, "0", STR_PAD_LEFT);
    }
}

echo (new Substitutingvariables)->solution("5");


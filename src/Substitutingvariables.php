<?php
namespace saeed;


class Substitutingvariables
{

    public function solution($c)
    {
        return ucwords($c);
    }
}

echo (new Substitutingvariables)->solution("hello my friends.");


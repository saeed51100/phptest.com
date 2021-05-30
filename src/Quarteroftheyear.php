<?php

namespace saeed;


class Quarteroftheyear
{

    public function quarterOf($c)
    {
        if ($c == 1 || $c == 2 || $c == 3) {
            return 1;
        }
        if ($c == 4 || $c == 5 || $c == 6) {
            return 2;
        }
        if ($c == 7 || $c == 8 || $c == 9) {
            return 3;
        }
        if ($c == 10 || $c == 11 || $c == 12) {
            return 4;
        } else {
            return "enter 1-12";
        }


    }
}

echo (new Quarteroftheyear)->quarterOf(66);


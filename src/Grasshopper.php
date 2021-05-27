<?php

namespace saeed;


class Grasshopper
{

    public function summation($c)
    {
        // I find this in internet:
        // return ($c * ($c + 1) / 2);

        return array_sum(range(1, $c));
    }
}


echo "<h2>";
echo (new Grasshopper)->summation(80);
echo "</h2>";

<?php

namespace saeed;


class Weightforweight
{
    function sortVazn($vazn)
    {
        $mmm = explode(" ", $vazn);
        return $mmm;

//        $mmm[0] = rtrim($mmm[0], ",");

     









    }
}



$a = "56 65 74 100 99 68 86 180 90";


echo "<pre>";
print_r((new Weightforweight)->sortVazn($a));
echo "</pre>";







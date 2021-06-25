<?php

namespace saeed;


class Weightforweight
{
    function sortVazn($vazn)
    {
        $mmm = explode(" ", $vazn);
//        return $mmm;


        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {


                $result[$row][0] = ($mmm[$row]);
// Get the sum of digits in PHP
// https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
                $zarib = array_sum(str_split($result[$row][0]));


                $result[$row][1] = ($zarib);

            }


        }
        return $result;

    }
}


$a = "56 65 74 100 99 68 86 180 90";


echo "<pre>";
print_r((new Weightforweight)->sortVazn($a));
echo "</pre>";







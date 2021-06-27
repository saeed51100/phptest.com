<?php

namespace saeed;


class Weightforweight
{

    function orderWeight($str)
    {
        $mmm = explode(" ", $str);
//        return $mmm;
        return sort($mmm);
//        return $mmm;
        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {
                // Get the sum of digits in PHP
                // https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
                $queu[$row][0] = $mmm[$row];
                $queu[$row][1] = array_sum(str_split($mmm[$row]));

            }

        }
//        return $queu ;

        // sort two dimensional array by column.
        // https://stackoverflow.com/questions/2426917/how-do-i-sort-a-multidimensional-array-by-one-of-the-fields-of-the-inner-array-i
        $col = array_column($queu, "1");
        array_multisort($col, SORT_ASC, $queu);
//        return $queu;

        // implode two dimensional array by column.
        // https://stackoverflow.com/questions/16710800/return-single-column-from-a-multi-dimensional-array
        return implode(" ", array_map(function ($entry) {
            return $entry["0"];
        }, $queu));


    }
}


//$a = "56 65 74 100 99 68 86 180 90";
$a = "2000 10003 1234000 44444444 9999 11 11 22 123";


echo "<pre>";
print_r((new Weightforweight)->orderWeight($a));
echo "</pre>";




<?php

namespace saeed;


class Weightforweight
{

    function orderWeight($str)
    {
        $mmm = explode(" ", $str);

        for ($row = 0; $row < count($mmm); $row++) {

            // Get the sum of digits in PHP
            // https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
            $queu = array_sum(str_split($mmm[$row]));


            $asum[$row] = ($queu);


        }
        // PHP - Merge two arrays (same-length) into one associative?
        // https://stackoverflow.com/questions/1200885/php-merge-two-arrays-same-length-into-one-associative
        $tt = array_combine($mmm, $asum);
//        return $tt;


        // asort(): Sort an associative array in descending order, according to the value.
        // see also arsort() ksort() and krsort() Sorting Arrays:
        // https://www.php.net/manual/en/array.sorting.php
        asort($tt);

        return $tt;


    }
}


$a = "56 65 74 100 99 68 86 180 90";


echo "<pre>";
print_r((new Weightforweight)->orderWeight($a));
echo "</pre>";




// Get the sum of digits in PHP
// https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
// $queu = array_sum(str_split($result[$row]));

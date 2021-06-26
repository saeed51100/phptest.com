<?php

namespace saeed;


class Weightforweight
{

    function orderWeight($str)
    {
        $mmm = explode(" ", $str);
//        return $mmm;
        for ($row = 0; $row < count($mmm); $row++) {

            // Get the sum of digits in PHP
            // https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
            $queu = array_sum(str_split($mmm[$row]));

            // Put them in new array:
            $asum[$row] = ($queu);


        }
//        return $asum;
        // PHP - Merge two arrays (same-length) into one associative?
        // https://stackoverflow.com/questions/1200885/php-merge-two-arrays-same-length-into-one-associative
        $tt = array_combine($mmm, $asum);
        return $tt;

        // asort(): Sort an associative array in descending order, according to the value.
        // see also arsort() ksort() and krsort() to Sorting Arrays:
        // https://www.php.net/manual/en/array.sorting.php
        asort($tt);


        // implode array with keys.
        // https://stackoverflow.com/questions/3233896/implode-array-of-values-as-well-as-its-keys
        return implode(" ", array_keys($tt));


    }
}


//$a = "56 65 74 100 99 68 86 180 90";
$a = "2000 10003 1234000 44444444 9999 11 11 22 123";


echo "<pre>";
print_r((new Weightforweight)->orderWeight($a));
echo "</pre>";




// Get the sum of digits in PHP
// https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
// $queu = array_sum(str_split($result[$row]));

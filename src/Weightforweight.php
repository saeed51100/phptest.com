<?php

namespace saeed;


class Weightforweight
{

    function orderWeight($str)
    {
        $mmm = explode(" ", $str);
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
//        return $col ;
        array_multisort($col, SORT_ASC, $queu);
//        return $queu[0] ;

        $acr = array_count_values($col);
//        return $acr ;




        // PHP sort array alphabetically using a subarray value
        // https://stackoverflow.com/questions/10484607/php-sort-array-alphabetically-using-a-subarray-value
//        usort($mmm, function ($mmm, $b) {
//            return strcmp($mmm[0], $b[0]);
//        });

//        return $mmm ;


        // When two numbers have the same "weight", let us class them as if they were strings (alphabetical ordering) and not numbers:
        // 180 is before 90 since, having the same "weight" (9), it comes before as a string.
//        for ($row = 0; $row < count($queu); $row++) {
//            for ($col = 0; $col < 2; $col++) {
//
//
//                if (
//                    (($row + 1) < count($queu))
//                    && ($queu[$row][1] == $queu[$row + 1][1])
//                    && ((strcmp(($queu[$row][0]), ($queu[$row + 1][0]))) > 0)
//                ) {
//                    $temp[$row][0] = $queu[$row][0];
//                    $queu[$row][0] = $queu[$row + 1][0];
//                    $queu[$row + 1][0] = $temp[$row][0];
//
//                }
//
//            }
//
//        }


        // implode two dimensional array by column.
        // https://stackoverflow.com/questions/16710800/return-single-column-from-a-multi-dimensional-array
        return implode(" ", array_map(function ($entry) {
            return $entry["0"];
        }, $queu));


    }
}


//$a = "56 65 74 100 99 68 86 180 90";
$a = "2000 10003 1234000 44444444 9999 11 11 22 123";
//$a = "10324 40332 42404 4370 14154 3760 47320 33831 8604 12386 15329 24167 40358 28831 45955 49298";
//$a = "10046 21370 20833 40328 32454 17734 12389 1778 23495 8808 46293 8970 35557 41786 39483 32779 44979 37879";


echo "<pre>";
print_r((new Weightforweight)->orderWeight($a));
echo "</pre>";




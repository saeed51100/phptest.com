<?php

namespace saeed;


class Weightforweight
{

    function orderWeight($str)
    {
        $mmm = explode(" ", $str);
//        return $mmm ;
        for ($row = 0; $row < count($mmm); $row++) {
            for ($col = 0; $col < 2; $col++) {
                // Get the sum of digits in PHP
                // https://stackoverflow.com/questions/3232511/get-the-sum-of-digits-in-php
                $queu[$row][0] = $mmm[$row];
                $queu[$row][1] = array_sum(str_split($mmm[$row]));

            }

        }
//        return $queu ;
        $colcol = array_column($queu, 1);
//        return $colcol;

        $result = preg_grep("/32/", $colcol);
        return $result;



        // Unique Values from Column in Array.
        // https://stackoverflow.com/questions/14270217/php-unique-values-from-column-in-array
        $zzz = array_unique(array_column($queu, 1));
        $unique = array_intersect_key( $queu, $zzz );
        return $unique;

        $hhh = /*array_unique*/( array_diff_assoc( $queu, $unique ) );
        return $hhh;




        // How to filter a two dimensional array by value.
        // https://stackoverflow.com/questions/27447923/how-to-filter-a-two-dimensional-array-by-value
//        $new = array_filter($queu, function ($var) {
//            return ( $var[0]=='40328' );
//        });
//        return $new;




        // sort two dimensional array by column.
        // https://stackoverflow.com/questions/2426917/how-do-i-sort-a-multidimensional-array-by-one-of-the-fields-of-the-inner-array-i
        $col = array_column($queu, "1");
//        return $col ;
        array_multisort($col, SORT_ASC, $queu);
//        return $queu ;







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




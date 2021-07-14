<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {

        // Keep keys:
        // foreach ($arr as $key => $val) {

        //     if ($val % 2 !== 0)
        //         $arrodd[$key] = $arr[$key];
        //     else $arreven[$key] = $arr[$key];

        // }

        $even = $odd = array();
        // Reset keys:
        foreach ($arr as $a) {
            if ($a % 2 == 0)
                $even[] = $a;
            else
                $odd[] = $a;

        }


        sort($odd);


        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                $newArr[] = array_shift($even);
            } else {
                $newArr[] = array_shift($odd);
            }
        }
        return $newArr;


    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";

//print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));








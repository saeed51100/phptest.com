<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {
        foreach ($arr as $key => $val) {

            if ($val % 2 !== 0) {
                $arrodd[$key] = $arr[$key];
//                         return array_search($value, $y);
            }
        }
//        return $arrodd;


        sort($arrodd,5);
        return $arrodd;
        // Combine two arrays ---- array operators:
        // https://stackoverflow.com/questions/6535444/combine-two-arrays
        return $arrodd + $arr;

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";









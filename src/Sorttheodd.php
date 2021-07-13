<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {
        foreach ($arr as $key => $val) {

            if ($val % 2 !== 0)
                $arrodd[$key] = $arr[$key];
            else $arreven[$key] = $arr[$key];

        }
//        return $arrodd;
//        return $arreven;


        foreach ($arrodd as $key => $val) {
            sort($arrodd);
                $arrodd2[$key] = $arrodd[$key];


        }








        return $arrodd2;





        // Combine two arrays ---- array operators:
        // https://stackoverflow.com/questions/6535444/combine-two-arrays
        return $arr + $arrodd;

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";









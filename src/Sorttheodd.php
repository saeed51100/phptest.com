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

        $key1 = array_column($arrodd,'0');
        return $key1;

        sort($arrodd);
//        return $arrodd;
        foreach ($arrodd as $key => $val) {

                $arrodd2[$key] = $arr[$key];


        }

        sort($arrodd);
//        return $arrodd;





        // Combine two arrays ---- array operators:
        // https://stackoverflow.com/questions/6535444/combine-two-arrays
        return $arr + $arrodd;

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";









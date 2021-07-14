<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {

        // Key unchanged:
//        foreach ($arr as $key => $val) {
//
//            if ($val % 2 !== 0)
//                $arrodd[$key] = $arr[$key];
//            else $arreven[$key] = $arr[$key];
//
//        }

        // Key is reset:
        foreach ($arr as $a) {
            if ($a % 2 == 0)
                $arreven[] = $a;
            else
                $arrodd[] = $a;

        }

//        return $arrodd;
        return $arreven;


//        return $arrodd;


        foreach ($arrodd as $key => $val) {
            sort($arrodd);
            $arrodd2[$key] = $arrodd[$key];

        }


        return $arrodd;


        // Combine two arrays ---- array operators:
        // https://stackoverflow.com/questions/6535444/combine-two-arrays
        return $arr + $arrodd;

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";

//print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));








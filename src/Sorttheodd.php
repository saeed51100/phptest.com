<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {
        foreach ($arr as $key => $val) {
//            if ($val % 2)
            if ($val % 2 == 0) {
                $arrodd[$key] = $arr[$key];
                //         return array_search($value, $y);
            }
        }
        return $arrodd;

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";









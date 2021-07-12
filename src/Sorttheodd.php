<?php

namespace saeed;

class Sorttheodd
{

    function sortArray(array $arr)
    {
        foreach ($arr as $key => $val) {
            if ($val % 2) {
                echo $key;
            }
        }

    }
}

echo "<pre>";
print_r((new Sorttheodd)->sortArray([5, 3, 2, 8, 1, 4]));
echo "</pre>";









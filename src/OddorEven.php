<?php

namespace saeed;

class OddorEven
{
    function odd_or_even(array $a): string
    {
        // My solution:
        // https://stackoverflow.com/questions/7959247/test-if-number-is-odd-or-even
        if (array_sum($a) % 2 == 0)
            return "even";
        else return "odd";


        // Codewars solution:
        // return array_sum($a) % 2 ? 'odd' : 'even';
    }
}


echo "<pre>";
print_r((new OddorEven)->odd_or_even([2, 5, 34, 6]));
echo "</pre>";




<?php

function remove(string $s): string
{
// I find this in stackoverflow ( Regular Expression ):
// return preg_replace('/!+$/', '', $s);


// Best Practices in codewars:
    return rtrim($s, '!');
}


echo (remove("!hello!!!!"));


//echo "<pre>",
//print_r(periodIsLate("2017-07-13", "2017-07-11", 5));
//echo "</pre>";


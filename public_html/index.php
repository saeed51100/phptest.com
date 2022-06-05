<?php

function remove($s)
{
    return rtrim($s, '!');
}

echo (remove("!hello!!!!"));


//echo "<pre>",
//print_r(periodIsLate("2017-07-13", "2017-07-11", 5));
//echo "</pre>";


<?php

function digitize($c)
{
    return array_reverse(str_split($c));

}

echo "<pre>";
print_r(digitize("68457"));
echo "</pre>";


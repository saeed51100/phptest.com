<?php

function periodIsLate($last, $today, $cycleLength): bool
{
    $last = date_create($last);
    $today = date_create($today);
    $cycleLength = date_create($cycleLength);

//    return ((date_diff($today, $last)->days) > $cycleLength);
return $last;
}

echo(periodIsLate(2016 - 07 - 13, 2015 - 07 - 15, 5));
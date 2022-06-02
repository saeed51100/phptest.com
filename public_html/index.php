<?php

function periodIsLate($last, $today, $cycleLength)
{


//    return ((date_diff(date_create($today), date_create($last))->days) > $cycleLength);

//    return ((date_diff(date_create($today), date_create($last))->days));
return $today;

}

//echo(periodIsLate(2016 - 07 - 13, 2015 - 07 - 15, 5));
echo '<pre>',
print_r(periodIsLate(2016 - 07 - 13, 2015 - 07 - 15, 5));
echo '</pre>';
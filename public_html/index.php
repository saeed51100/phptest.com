<?php

function periodIsLate($last, $today, $cycleLength)
{
$aaa=date_create($today);
$bbb=date_create($last);

if ((date_diff($aaa, $bbb) ->days)>$cycleLength){
    return 1;
}



//    return ((date_diff(date_create($today), date_create($last))->days) > $cycleLength);


}


//echo "<pre>",
//print_r(periodIsLate("2017-07-13", "2017-07-11", 5));
//echo "</pre>";

echo(periodIsLate("2017-07-18", "2017-07-11", 10));
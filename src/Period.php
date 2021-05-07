<?php
namespace saeed;

class Period
{
   public function periodIsLate($last, $today, $cycleLength): bool
   {

       return ((date_diff($today, $last)->days) > $cycleLength);

   }
}

//echo (new Period())->periodIsLate(2016-07-13,2015-07-15,5);











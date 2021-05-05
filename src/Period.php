<?php
namespace saeed;

class Period
{
   public function periodIsLate($last, $today, $cycleLength): bool
   {
//       return false;
       return $last;

   }
}

echo (new Period())->periodIsLate(2016-07-13,2016-07-15,5);













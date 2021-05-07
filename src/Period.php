<?php
namespace saeed;

class Period
{
   public function periodIsLate($last, $today, $cycleLength): bool
   {

       $last = 2021-05-01;
       $today = 2021-05-15;
       $cycleLength = time($today)-time($last);
       return $cycleLength;

//       return false;

   }
}

//echo (new Period())->periodIsLate(2016-07-13,2016-07-15,5);

echo (new Period())->periodIsLate($cycleLength=45);










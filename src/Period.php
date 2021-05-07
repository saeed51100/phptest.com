<?php
namespace saeed;

class Period
{
   public function periodIsLate($last, $today, $cycleLength): bool
   {

       if ($cycleLength>($today-$last)){
           return false;
       }else{
           return true;
       }
//       return false;

   }
}

echo (new Period())->periodIsLate(2016-07-13,2016-07-15,5);











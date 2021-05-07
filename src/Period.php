<?php
namespace saeed;

class Period
{
   public function periodIsLate($last, $today, $cycleLength)
   {

//       if ($cycleLength>($today-$last)){
//           return "false";
//       }else{
//           return "true";
//       }
//       return false;

      return date($today)-date($last);

   }
}

echo (new Period())->periodIsLate(2016-07-13,2015-07-15,5);











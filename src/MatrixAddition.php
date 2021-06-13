<?php

namespace saeed;


class MatrixAddition
{
    function myfunction($v)
    {
        return($v*$v);
    }



}
$a=array(1,2,3,4,5);
echo "<pre>";
   print_r(array_map(((new MatrixAddition)->myfunction),$a));
echo "</pre>";


//print_r(array_map("myfunction",$a));
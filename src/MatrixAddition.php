<?php

namespace saeed;


use phpDocumentor\Reflection\Types\This;

class MatrixAddition
{
    function myfunction($v)
    {
        return($v*$v);
    }



}
$a=array(1,2,3,4,5);
echo "<pre>";
   print_r((new MatrixAddition)->myfunction($a));
echo "</pre>";





//https://backendbaz.ir/php-array-func-array-map/
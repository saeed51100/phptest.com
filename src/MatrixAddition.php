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
$fff = $this
   print_r(array_map(((new MatrixAddition)->myfunction),$a));
echo "</pre>";





//https://backendbaz.ir/php-array-func-array-map/
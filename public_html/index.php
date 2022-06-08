<?php


function reverse($c): string
{
   return implode(' ', array_reverse(explode(' ', strrev($c)))) ;
}

echo reverse("ehT kciuq nworb xof spmuj revo eht yzal .god");

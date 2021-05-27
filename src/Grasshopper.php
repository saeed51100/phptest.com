<?php
namespace saeed;


class Grasshopper
{

    public function summation($c)
    {
        return ($c * ($c + 1) / 2);
    }
}




echo "<h2>";
echo(new Grasshopper)->summation (80) ;
echo "</h2>";

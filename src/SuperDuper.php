<?php
namespace reza;

class SuperDuper
{
    public function problem($x)
    {
//        return is_nan($x) || $x === "" ? "Error" : ($x * 50) + 6;
        return is_numeric($x) ? ($x * 50) + 6 : "Error"  ;

    }
}


echo(new SuperDuper)->problem(3);









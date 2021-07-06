<?php

namespace saeed;

class Dashatizeit
{

    public function dashatize(int $num): string
    {


        // codewars solution:
        return trim(str_replace('--', '-', preg_replace('/([13579])/','-$1-', $num)), '-');



    }


}

echo (new Dashatizeit)->dashatize(124434568789);



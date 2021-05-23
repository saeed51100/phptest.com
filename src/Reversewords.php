<?php
namespace saeed;


class Reversewords
{

    public function getchar($c)
    {
        return chr($c);
    }
}

echo (new Reversewords)->getchar(75);


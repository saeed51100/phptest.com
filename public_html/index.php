<?php
namespace saeed;


class Getchar
{

    public function getchar($c)
    {
        return chr($c);
    }
}

echo (new Getchar)->getchar(75);

<?php

final class Getchar
{
    private $getchar;

    private function __construct (string $getchar)
    {
        return chr();
    }

}

echo getchar(74);

function getchar($c){
    return chr($c);
}
echo getchar(75);
<?php

namespace saeed;

class diff
{
    public function remove(string $s): string
    {
// I find this in stackoverflow:
// return preg_replace('/!+$/', '', $s);


// Best Practices in codewars:
        return rtrim($s, '!');
    }
}

echo (new diff())->remove("!hello!!!!");











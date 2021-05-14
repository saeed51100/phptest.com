<?php
namespace saeed;

class Exclamation2
{
    public function remove(string $s): string {
        // Coding and coding ...
        return preg_replace('/!+$/', '', $s);
    }
}

echo (new Exclamation2())->remove("!hello!!!!");











<?php

namespace saeed;


class Stopgninnip
{

    public function quarterOf($month)
    {
        return ceil($month / 3);

    }
}

echo (new Stopgninnip)->quarterOf(7);


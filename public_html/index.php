<?php


function overTheRoad($address, $street)
{
    return $street * 2 - $address + 1;
}


echo "<pre>";
print_r(overTheRoad(5, 6));
echo "</pre>";

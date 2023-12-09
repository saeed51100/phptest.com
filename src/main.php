<?php
$a = 32;
echo "a is " . is_numeric($a) . "\n";
$b = 0;
echo "b is " . is_numeric($b) . "\n";
$c = 32.5;
echo "c is " . is_numeric($c) . "\n";
$d = "32";
echo "d is " . is_numeric($d) . "\n";
$e = true;
echo "e is " . is_numeric($e) . "\n";
$f = null;
echo "f is " . is_numeric($f) . "\n";
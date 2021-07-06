<?php

use saeed\BasicMathematicalOperations;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $BasicMathematicalOperations;

    public function setUp(): void
    {
        $this->BasicMathematicalOperations = new BasicMathematicalOperations();
    }

    public function test()
    {
        echo "<h1>Static Test Cases: </h1><br>";
        $this->check($this->BasicMathematicalOperations->basicOp('+', 4, 7), 11);
        $this->check($this->BasicMathematicalOperations->basicOp('-', 15, 18), -3);
        $this->check($this->BasicMathematicalOperations->basicOp('*', 5, 5), 25);
        $this->check($this->BasicMathematicalOperations->basicOp('/', 49, 7), 7);
    }
    private function check($a, $b)
    {
        echo "<span style='font-size: 20px'><span style='color:" . ($a == $b ? "green'>True:" : "red'>False:") . "</span></span><br>" . "Expected: " . $b . " <br> Got: " . $a . "<br>";
        $this->assertSame($a, $b);
    }
}


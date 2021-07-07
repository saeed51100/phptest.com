<?php

use saeed\CountbyX;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $BasicMathematicalOperations;

    public function setUp(): void
    {
        $this->BasicMathematicalOperations = new CountbyX();
    }

    public function testExample() {
        $this->assertSame([1,2,3,4,5], countBy(1,5), "Array does not match");
        $this->assertSame([2,4,6,8,10], countBy(2,5), "Array does not match");
    }
}


<?php

use saeed\CountbyX;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $CountbyX;

    public function setUp(): void
    {
        $this->CountbyX = new CountbyX();
    }

    public function testExample() {
        $this->assertSame([1,2,3,4,5], $this->CountbyX->countBy(1,5), "Array does not match");
        $this->assertSame([2,4,6,8,10], $this->CountbyX->countBy(2,5), "Array does not match");
    }
}


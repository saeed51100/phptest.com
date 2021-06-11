<?php

use saeed\Multiply;
use PHPUnit\Framework\TestCase;

class MultiplyTest extends TestCase
{
    protected $Multiply;

    public function setUp(): void
    {
        $this->Multiply = new \saeed\Multiply();
    }

    public function testThatSomethingShouldHappen()
    {
        $this->assertEquals("a", "a");
        $this->assertEquals([0], [0]);
    }
}




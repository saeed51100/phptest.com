<?php

use saeed\OddorEven;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $OddorEven;

    public function setUp(): void
    {
        $this->OddorEven = new OddorEven();
    }

    public function testDescriptionExamples()
    {
        $this->assertEquals('even', $this->OddorEven->odd_or_even([0]));
        $this->assertEquals('odd', $this->OddorEven->odd_or_even([2, 5, 34, 6]));
        $this->assertEquals('even', $this->OddorEven->odd_or_even([0, -1, -5]));
    }

}



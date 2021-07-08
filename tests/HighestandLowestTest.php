<?php

use saeed\HighestandLowest;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $HighestandLowest;

    public function setUp(): void
    {
        $this->HighestandLowest = new HighestandLowest();
    }

    public function testSampleTests()
    {
        $this->assertEquals("42 -9", $this->HighestandLowest->highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));
    }
}


<?php

use saeed\BeginnerSeries2Clock;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $BeginnerSeries2Clock;

    public function setUp(): void
    {
        $this->BeginnerSeries2Clock = new BeginnerSeries2Clock();
    }

    public function testBasicTests() {
        $this->assertEquals(61000, $this->BeginnerSeries2Clock->past(0, 1, 1));
        $this->assertEquals(3661000, $this->BeginnerSeries2Clock->past(1, 1, 1));
        $this->assertEquals(0, $this->BeginnerSeries2Clock->past(0, 0, 0));
        $this->assertEquals(3601000, $this->BeginnerSeries2Clock->past(1, 0, 1));
        $this->assertEquals(3600000, $this->BeginnerSeries2Clock->past(1, 0, 0));
    }}


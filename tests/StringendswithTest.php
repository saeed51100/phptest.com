<?php

use saeed\Stringendswith;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $overTheRoad;

    public function setUp(): void
    {
        $this->overTheRoad = new Stringendswith();
    }

    public function testOne() {
        $this->assertSame(6, $this->overTheRoad->overTheRoad(1, 3));
    }
    public function testTwo() {
        $this->assertSame(4, $this->overTheRoad->overTheRoad(3, 3));
    }
    public function testThree() {
        $this->assertSame(5, $this->overTheRoad->overTheRoad(2, 3));
    }
    public function testFour() {
        $this->assertSame(8, $this->overTheRoad->overTheRoad(3, 5));
    }
    public function testFive() {
        $this->assertSame(16, $this->overTheRoad->overTheRoad(7, 11));
    }
}


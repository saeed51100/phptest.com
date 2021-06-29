<?php

use saeed\Weightforweight;
use PHPUnit\Framework\TestCase;


class WeightforweightTest extends TestCase
{
    protected $Weightforweight;

    public function setUp(): void
    {
        $this->Weightforweight = new Weightforweight();
    }

    public function testBasics()
    {
        $this->assertEquals("2000 103 123 4444 99", $this->Weightforweight->orderWeight("103 123 4444 99 2000"));
        $this->assertEquals("11 11 2000 10003 22 123 1234000 44444444 9999", $this->Weightforweight->orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123"));
        $this->assertEquals("10324 40332 42404 4370 14154 3760 47320 33831 8604 12386 15329 24167 40358 28831 45955 49298", $this->Weightforweight->orderWeight("10324 40332 4370 42404 14154 3760 47320 33831 8604 12386 15329 24167 40358 28831 45955 49298"));
        $this->assertEquals("10046 21370 20833 40328 32454 17734 12389 1778 23495 46293 8808 8970 35557 41786 39483 32779 44979 37879", $this->Weightforweight->orderWeight("10046 21370 20833 40328 32454 17734 12389 1778 23495 8808 46293 8970 35557 41786 39483 32779 44979 37879"));
    }
}



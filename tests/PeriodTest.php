<?php
use saeed\Period;
use PHPUnit\Framework\TestCase;

class PeriodTest extends TestCase
{
    protected $Period;

    public function setUp(): void
    {
        $this->Period = new \saeed\Period();
    }

    public function testExample() {
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
        $this->assertSame(true, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
    }
}




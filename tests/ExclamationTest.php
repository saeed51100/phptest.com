<?php

use PHPUnit\Framework\TestCase;

class ExclamationTest extends TestCase
{
    protected $Exclamation;

    public function setUp(): void
    {
        $this->Exclamation = new \saeed\Exclamation();
    }

    public function testExample() {
        $this->assertSame(false, $this->Period->periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
        $this->assertSame(true, $this->Period->periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
    }
}




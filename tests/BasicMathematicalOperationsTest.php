<?php

use saeed\Dashatizeit;
use PHPUnit\Framework\TestCase;


class BasicMathematicalOperationsTest extends TestCase
{
    protected $Dashatizeit;

    public function setUp(): void
    {
        $this->Dashatizeit = new Dashatizeit();
    }

    public function testSampleTests()
    {
        $this->assertEquals('2-7-4', $this->Dashatizeit->dashatize(274));
        $this->assertEquals('5-3-1-1', $this->Dashatizeit->dashatize(5311));
        $this->assertEquals('86-3-20', $this->Dashatizeit->dashatize(86320));
        $this->assertEquals('9-7-4-3-02', $this->Dashatizeit->dashatize(974302));

    }
}


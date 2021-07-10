<?php

use saeed\Buildasquare;
use PHPUnit\Framework\TestCase;


class BuildasquareTest extends TestCase
{
    protected $Buildasquare;

    public function setUp(): void
    {
        $this->Buildasquare = new Buildasquare();
    }

    public function testBasicTests() {
        $this->assertEquals("++++++++\n++++++++\n++++++++\n++++++++\n++++++++\n++++++++\n++++++++\n++++++++", $this->Buildasquare->generateShape(8));
    }
}



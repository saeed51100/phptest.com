<?php

use PHPUnit\Framework\TestCase;

class Exclamation2Test extends TestCase
{
    protected $Exclamation;

    public function setUp(): void
    {
        $this->Exclamation = new \saeed\Exclamation2();
    }

    public function testDescriptionExamples() {
        $this->assertEquals("Hi", remove("Hi!"));
        $this->assertEquals("Hi", remove("Hi!!!"));
        $this->assertEquals("!Hi", remove("!Hi"));
        $this->assertEquals("!Hi", remove("!Hi!"));
        $this->assertEquals("Hi! Hi", remove("Hi! Hi!"));
        $this->assertEquals("Hi", remove("Hi"));
    }
}




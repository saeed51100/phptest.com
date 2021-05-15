<?php

use PHPUnit\Framework\TestCase;

class diffTest extends TestCase
{
    protected $Exclamation2;

    public function setUp(): void
    {
        $this->Exclamation2 = new \saeed\diff();
    }

    public function testDescriptionExamples() {
        $this->assertEquals("Hi", $this->Exclamation2->remove("Hi!"));
        $this->assertEquals("Hi", $this->Exclamation2->remove("Hi!!!"));
        $this->assertEquals("!Hi", $this->Exclamation2->remove("!Hi"));
        $this->assertEquals("!Hi", $this->Exclamation2->remove("!Hi!"));
        $this->assertEquals("Hi! Hi", $this->Exclamation2->remove("Hi! Hi!"));
        $this->assertEquals("Hi", $this->Exclamation2->remove("Hi"));
    }
}




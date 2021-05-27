<?php

use saeed\Grasshopper;
use PHPUnit\Framework\TestCase;

final class GrasshopperTest extends TestCase

{
    protected  $Grasshopper;


    public function setUp(): void
    {
        $this->Grasshopper = new Grasshopper();
    }

    public function testThatSummationWorksForExampleTests() {
        $this->assertEquals(1, $this->Grasshopper->summation(1));
        $this->assertEquals(3, $this->Grasshopper->summation(2));
        $this->assertEquals(6, $this->Grasshopper->summation(3));
        $this->assertEquals(10, $this->Grasshopper->summation(4));
        $this->assertEquals(15, $this->Grasshopper->summation(5));
    }

}



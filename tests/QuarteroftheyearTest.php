<?php
use saeed\Quarteroftheyear;
use PHPUnit\Framework\TestCase;


class QuarteroftheyearTest extends TestCase
{
    protected $Quarteroftheyear;

    public function setUp(): void
    {
        $this->Quarteroftheyear = new Quarteroftheyear();
    }

    public function testSampleTests()
    {
        $this->assertEquals(1, $this->Quarteroftheyear->quarterOf(2));
        $this->assertEquals(2, $this->Quarteroftheyear->quarterOf(6));
        $this->assertEquals(3, $this->Quarteroftheyear->quarterOf(7));

    }
}


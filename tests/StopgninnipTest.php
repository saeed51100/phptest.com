<?php
use saeed\Stopgninnip;
use PHPUnit\Framework\TestCase;


class StopgninnipTest extends TestCase
{
    protected $Quarteroftheyear;

    public function setUp(): void
    {
        $this->Quarteroftheyear = new Stopgninnip();
    }

    public function testSampleTests()
    {
        $this->assertEquals(1, $this->Quarteroftheyear->quarterOf(2));
        $this->assertEquals(2, $this->Quarteroftheyear->quarterOf(6));
        $this->assertEquals(3, $this->Quarteroftheyear->quarterOf(7));

    }
}


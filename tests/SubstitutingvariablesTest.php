<?php
use saeed\Substitutingvariables;
use PHPUnit\Framework\TestCase;


class SubstitutingvariablesTest extends TestCase
{
    protected $Substitutingvariables;

    public function setUp(): void
    {
        $this->Substitutingvariables = new Substitutingvariables();
    }

    public function testSampleTests()
    {

        $this->assertEquals("value is 00005", $this->Substitutingvariables->solution(5));

    }
}

<?php
use saeed\Substitutingvariables;
use PHPUnit\Framework\TestCase;


class SubstitutingvariablesTest extends TestCase
{
    protected $Upperall;

    public function setUp(): void
    {
        $this->Upperall = new Substitutingvariables();
    }

    public function testSampleTests()
    {

        $this->assertEquals("Hello My Friends.", $this->Upperall->caps("hello my friends."));

    }
}

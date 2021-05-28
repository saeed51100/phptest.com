<?php
use saeed\Upperall;
use PHPUnit\Framework\TestCase;


class UpperallTest extends TestCase
{
    protected $Upperall;

    public function setUp(): void
    {
        $this->Upperall = new Upperall();
    }

    public function testSampleTests()
    {

        $this->assertEquals("Hello My Friends.", $this->Upperall->caps("hello my friends."));

    }
}

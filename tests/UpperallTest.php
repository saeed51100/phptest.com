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

        $this->assertEquals("Fdhd Hs Sdsg Tr", $this->Upperall->caps("fdhd hs sdsg tr"));

    }
}

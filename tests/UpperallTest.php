<?php

use saeed\Upperall;
use PHPUnit\Framework\TestCase;


class UpperallTest extends TestCase
{
    protected $Getchar;

    public function setUp(): void
    {
        $this->Getchar = new Upperall();
    }

    public function testSampleTests()
    {

        $this->assertEquals('A', $this->Getchar->getChar(65));

    }
}

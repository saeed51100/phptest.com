<?php

use saeed\Getchar;
use PHPUnit\Framework\TestCase;


class getcharTest extends TestCase
{
    protected $Getchar;

    public function setUp(): void
    {
        $this->Getchar = new Getchar();
    }

    public function testSampleTests()
    {

        $this->assertEquals('A', $this->Getchar->getChar(65));

    }
}

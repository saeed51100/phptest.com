<?php

use saeed\Reversewords;
use PHPUnit\Framework\TestCase;


class ReversewordsTest extends TestCase
{
    protected $Getchar;

    public function setUp(): void
    {
        $this->Getchar = new Reversewords();
    }

    public function testSampleTests()
    {

        $this->assertEquals('A', $this->Getchar->getChar(65));

    }
}

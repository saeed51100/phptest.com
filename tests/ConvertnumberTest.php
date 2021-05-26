<?php

use saeed\Convertnumber;
use PHPUnit\Framework\TestCase;


class ConvertnumberTest extends TestCase
{
    protected $Convertnumber;


    public function setUp(): void
    {
        $this->Convertnumber = new Convertnumber();
    }

    public function testBasicTests()
    {

        $this->assertEquals([1, 3, 2, 5, 3], $this->Convertnumber->digitize(35231));

    }

}



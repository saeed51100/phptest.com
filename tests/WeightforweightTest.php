<?php

use saeed\Weightforweight;
use PHPUnit\Framework\TestCase;


class WeightforweightTest extends TestCase
{
    protected $Weightforweight;

    public function setUp(): void
    {
        $this->Weightforweight = new Weightforweight();
    }

    public function testBasics() {
        $this->assertEquals("2000 103 123 4444 99", $this->Weightforweight->orderWeight("103 123 4444 99 2000"));
//        $this->assertEquals("11 11 2000 10003 22 123 1234000 44444444 9999", $this->Weightforweight->orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123"));
    }}



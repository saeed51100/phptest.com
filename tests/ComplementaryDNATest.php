<?php

use saeed\ComplementaryDNA;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $Stringendswith;

    public function setUp(): void
    {
        $this->Stringendswith = new ComplementaryDNA();
    }

    public function testExamples() {
        $this->assertEquals("TTTT", DNA_strand("AAAA"));
        $this->assertEquals("AAAA", DNA_strand("TTTT"));
        $this->assertEquals("TAACG", DNA_strand("ATTGC"));
        $this->assertEquals("ATTGC", DNA_strand("TAACG"));
        $this->assertEquals("CATA", DNA_strand("GTAT"));
        $this->assertEquals("GTAT", DNA_strand("CATA"));
    }}


<?php

use saeed\ComplementaryDNA;
use PHPUnit\Framework\TestCase;


class MyTestCases extends TestCase
{
    protected $ComplementaryDNA;

    public function setUp(): void
    {
        $this->ComplementaryDNA = new ComplementaryDNA();
    }

    public function testExamples() {
        $this->assertEquals("TTTT", $this->ComplementaryDNA->DNA_strand("AAAA"));
        $this->assertEquals("AAAA", $this->ComplementaryDNA->DNA_strand("TTTT"));
        $this->assertEquals("TAACG", $this->ComplementaryDNA->DNA_strand("ATTGC"));
        $this->assertEquals("ATTGC", $this->ComplementaryDNA->DNA_strand("TAACG"));
        $this->assertEquals("CATA", $this->ComplementaryDNA->DNA_strand("GTAT"));
        $this->assertEquals("GTAT", $this->ComplementaryDNA->DNA_strand("CATA"));
    }}


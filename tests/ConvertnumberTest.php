<?php

use saeed\Convertnumber;
use PHPUnit\Framework\TestCase;


class ConvertnumberTest extends TestCase
{
    protected $Reversewords;



    public function setUp(): void
    {
        $this->Reversewords = new Convertnumber();
    }
    public function testBasicTests() {
        $this->assertEquals('ehT kciuq nworb xof spmuj revo eht yzal .god', $this->Reversewords-> reverse('The quick brown fox jumps over the lazy dog.'));
        $this->assertEquals('elppa', $this->Reversewords-> reverse('apple'));
        $this->assertEquals('a b c d', $this->Reversewords-> reverse('a b c d'));
        $this->assertEquals('elbuod  decaps  sdrow', $this->Reversewords-> reverse('double  spaced  words'));
        $this->assertEquals('desserts stressed', $this->Reversewords-> reverse('stressed desserts'));
        $this->assertEquals('olleh olleh', $this->Reversewords-> reverse('hello hello'));
    }

}




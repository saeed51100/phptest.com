<?php

use PHPUnit\Framework\TestCase;

class ArraydiffTest extends TestCase
{
    protected $Exclamation2;

    public function setUp(): void
    {
        $this->Exclamation2 = new \saeed\Arraydiff();
    }

    public function testSampleTests() {
        $this->assertEquals([2], $this->Exclamation2->arrayDiff([1,2], [1]), "a was [1,2], b was [1], expected [2]");
        $this->assertEquals([2,2], $this->Exclamation2->arrayDiff([1,2,2], [1]), "a was [1,2,2], b was [1], expected [2,2]");
        $this->assertEquals([1], $this->Exclamation2->arrayDiff([1,2,2], [2]), "a was [1,2,2], b was [2], expected [1]");
        $this->assertEquals([1,2,2], $this->Exclamation2->arrayDiff([1,2,2], []), "a was [1,2,2], b was [], expected [1,2,2]");
        $this->assertEquals([], $this->Exclamation2->arrayDiff([], [1,2]), "a was [], b was [1,2], expected []");
        $this->assertEquals([3], $this->Exclamation2->arrayDiff([1, 2, 3], [1,2]), "a was [1, 2, 3], b was [1,2], expected [3]");
    }
}



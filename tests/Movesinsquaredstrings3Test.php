<?php

use saeed\Movesinsquaredstrings3;
use PHPUnit\Framework\TestCase;


class Movesinsquaredstrings3Test extends TestCase
{
    protected $Movesinsquaredstrings2;

    public function setUp(): void
    {
        $this->Movesinsquaredstrings2 = new Movesinsquaredstrings3();
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testOperRotBasics()
    {
        $this->revTest($this->Movesinsquaredstrings2->oper("rot", "fijuoo\nCqYVct\nDrPmMJ\nerfpBA\nkWjFUG\nCVUfyL"), "LyfUVC\nGUFjWk\nABpfre\nJMmPrD\ntcVYqC\nooujif");
        $this->revTest($this->Movesinsquaredstrings2->oper("rot", "rkKv\ncofM\nzXkh\nflCB"), "BClf\nhkXz\nMfoc\nvKkr");
    }

    public function testOperSelfieRotBasics()
    {
        $this->revTest($this->Movesinsquaredstrings2->oper("selfieAndRot", "xZBV\njsbS\nJcpN\nfVnP"),
            "xZBV....\njsbS....\nJcpN....\nfVnP....\n....PnVf\n....NpcJ\n....Sbsj\n....VBZx");
        $this->revTest($this->Movesinsquaredstrings2->oper("selfieAndRot", "uLcq\nJkuL\nYirX\nnwMB"),
            "uLcq....\nJkuL....\nYirX....\nnwMB....\n....BMwn\n....XriY\n....LukJ\n....qcLu");
    }
}


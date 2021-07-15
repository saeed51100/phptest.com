<?php

use saeed\Movesinsquaredstrings1;
use PHPUnit\Framework\TestCase;


class Movesinsquaredstrings1Test extends TestCase
{
    protected $Movesinsquaredstrings1;

    public function setUp(): void
    {
        $this->Movesinsquaredstrings1 = new Movesinsquaredstrings1();
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testOperVerticalBasics()
    {
        $this->revTest($this->Movesinsquaredstrings1->oper('vertMirror', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"), "QHdgSh\noaMDnH\nXxNNlC\nHxxvRi\nAvVTqb\nuRySvw");
        $this->revTest($this->Movesinsquaredstrings1->oper('vertMirror', "IzOTWE\nkkbeCM\nWuzZxM\nvDddJw\njiJyHF\nPVHfSx"), "EWTOzI\nMCebkk\nMxZzuW\nwJddDv\nFHyJij\nxSfHVP");
    }

//    public function testOperHorizontalBasics()
//    {
//        $this->revTest($this->Movesinsquaredstrings1->oper('horMirror', "lVHt\nJVhv\nCSbg\nyeCt"), "yeCt\nCSbg\nJVhv\nlVHt");
//        $this->revTest($this->Movesinsquaredstrings1->oper('horMirror', "njMK\ndbrZ\nLPKo\ncEYz"), "cEYz\nLPKo\ndbrZ\nnjMK");
//    }
}



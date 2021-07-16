<?php

use saeed\Movesinsquaredstrings2;
use PHPUnit\Framework\TestCase;


class Movesinsquaredstrings2Test extends TestCase
{
    protected $Movesinsquaredstrings2;

    public function setUp(): void
    {
        $this->Movesinsquaredstrings2 = new Movesinsquaredstrings2();
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testOperVerticalBasics()
    {
        $this->revTest($this->Movesinsquaredstrings2->oper('vertMirror', "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"), "QHdgSh\noaMDnH\nXxNNlC\nHxxvRi\nAvVTqb\nuRySvw");
        $this->revTest($this->Movesinsquaredstrings2->oper('vertMirror', "IzOTWE\nkkbeCM\nWuzZxM\nvDddJw\njiJyHF\nPVHfSx"), "EWTOzI\nMCebkk\nMxZzuW\nwJddDv\nFHyJij\nxSfHVP");
    }

    public function testOperHorizontalBasics()
    {
        $this->revTest($this->Movesinsquaredstrings2->oper('horMirror', "lVHt\nJVhv\nCSbg\nyeCt"), "yeCt\nCSbg\nJVhv\nlVHt");
        $this->revTest($this->Movesinsquaredstrings2->oper('horMirror', "njMK\ndbrZ\nLPKo\ncEYz"), "cEYz\nLPKo\ndbrZ\nnjMK");
    }
}



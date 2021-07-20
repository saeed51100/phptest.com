<?php


use PHPUnit\Framework\TestCase;
include '../src/Movesinsquaredstrings3.php';

class Movesinsquaredstrings3Test extends TestCase
{
    protected $Movesinsquaredstrings3;

//    public function setUp(): void
//    {
//        $this->Movesinsquaredstrings3 = new Movesinsquaredstrings3();
//    }

    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testOperRot90ClockBasics() {
        $this->revTest(oper("rot90Clock", "rgavce\nvGcEKl\ndChZVW\nxNWgXR\niJBYDO\nSdmEKb"),
            "Sixdvr\ndJNCGg\nmBWhca\nEYgZEv\nKDXVKc\nbORWle");
        $this->revTest(oper("rot90Clock", "EFAxSN\nXbJObC\nMrNVyg\nUKqDsE\nrYnAfU\nnNjADZ"),
            "nrUMXE\nNYKrbF\njnqNJA\nAADVOx\nDfsybS\nZUEgCN");
    }
    public function testOperDiag1SymBasics() {
        $this->revTest(oper("diag1Sym", "wuUyPC\neNHWxw\nehifmi\ntBTlFI\nvWNpdv\nIFkGjZ"),
            "weetvI\nuNhBWF\nUHiTNk\nyWflpG\nPxmFdj\nCwiIvZ");
        $this->revTest(oper("diag1Sym", "qAdPMX\nkRIQKU\nJeoroo\nNwVbtn\nAmQUqi\nVguxub"),
            "qkJNAV\nARewmg\ndIoVQu\nPQrbUx\nMKotqu\nXUonib");
    }
    public function testOperSelfieAndDiagBasics() {
        $this->revTest(oper("selfieAndDiag1", "NJVGhr\nMObsvw\ntPhCtl\nsoEnhi\nrtQRLK\nzjliWg"),
            "NJVGhr|NMtsrz\nMObsvw|JOPotj\ntPhCtl|VbhEQl\nsoEnhi|GsCnRi\nrtQRLK|hvthLW\nzjliWg|rwliKg");
    }
}



<?php

use saeed\Dashatizeit;
use PHPUnit\Framework\TestCase;


class DashatizeitTest extends TestCase
{
    protected $Stopgninnip;

    public function setUp(): void
    {
        $this->Stopgninnip = new Dashatizeit();
    }

    public function testSampleTests()
    {
        $this->assertEquals("emocleW", $this->Stopgninnip->spinWords("Welcome"));
        $this->assertEquals("Hey wollef sroirraw", $this->Stopgninnip->spinWords("Hey fellow warriors"));
        $this->assertEquals("This is a test", $this->Stopgninnip->spinWords("This is a test"));
        $this->assertEquals("This is rehtona test", $this->Stopgninnip->spinWords("This is another test"));
        $this->assertEquals("You are tsomla to the last test", $this->Stopgninnip->spinWords("You are almost to the last test"));
        $this->assertEquals("Just gniddik ereht is llits one more", $this->Stopgninnip->spinWords("Just kidding there is still one more"));
        $this->assertEquals("ylsuoireS this is the last one", $this->Stopgninnip->spinWords("Seriously this is the last one"));

    }
}


<?php
use App\class\Arbitre;
use PHPUnit\Framework\TestCase;

class TestArbitre extends TestCase
{
    public function testAll(): void
    {
        $unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");
        $this->assertEquals("Argentin", $unArbitre->getPays());
        $unArbitre->setPays("Brésilien");
        $this->assertEquals("Brésilien", $unArbitre->getPays());
        $this->assertEquals("Arbitre : Pitana Nestor nationalité : Brésilien", $unArbitre->donneTexte());
    }
}
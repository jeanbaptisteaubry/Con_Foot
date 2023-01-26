<?php

use App\class\Humain;
use PHPUnit\Framework\TestCase; // On importe la classe TestCase de PHPUnit


class TestMatch extends TestCase // On crée une classe qui hérite de TestCase
{
    public function testAll(): void
    {
        $match = new Match("France", "Allemagne", new DateTime("2021-06-17"), "Stade de France", "Pitana");
        $this->assertEquals("France", $match->getEquipe1());
        $this->assertEquals("Allemagne", $match->getEquipe2());
        $this->assertEquals("2021-06-17", $match->getDateMatch()->format("Y-m-d"));
        $this->assertEquals("Stade de France", $match->getStade());
        $this->assertEquals("Pitana", $match->getArbitre());
        $match->setEquipe1("Brésil");
        $match->setEquipe2("Argentine");
        $match->setDateMatch(new DateTime("2021-06-18"));
        $match->setStade("Stade de Rio");
        $match->setArbitre("Nestor");
        $this->assertEquals("Brésil", $match->getEquipe1());
        $this->assertEquals("Argentine", $match->getEquipe2());
        $this->assertEquals("2021-06-18", $match->getDateMatch()->format("Y-m-d"));
        $this->assertEquals("Stade de Rio", $match->getStade());
        $this->assertEquals("Nestor", $match->getArbitre());
        $this->assertEquals("Match : Brésil - Argentine le 18/06/2021 au Stade de Rio arbitré par Nestor", $match->donneTexte());
    }
}
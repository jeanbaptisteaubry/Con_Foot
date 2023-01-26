<?php

use App\class\Stade;
use PHPUnit\Framework\TestCase;
class TestStade extends TestCase
{
    public function testAll(): void
    {
        $stade = new Stade("Stade de France");
        $this->assertEquals("Stade de France", $stade->getNom());
        $stade->setNom("Stade de Rio");
        $this->assertEquals("Stade de Rio", $stade->getNom());
        $this->assertEquals("Stade : Stade de Rio", $stade->donneTexte());
    }
}
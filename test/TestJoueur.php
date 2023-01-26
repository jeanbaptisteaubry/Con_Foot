<?php

use App\class\Joueur;
use PHPUnit\Framework\TestCase;

class TestJoueur extends TestCase
{
    public function testAll(): void
    {
        $GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9);
        $this->assertEquals(9, $GO->getNumeroMaillot());
        $GO->setNumeroMaillot(19);
        $this->assertEquals(19, $GO->getNumeroMaillot());
        $this->assertEquals("Joueur : Giroud Olivier numéro : 19", $GO->donneTexte());
    }
}
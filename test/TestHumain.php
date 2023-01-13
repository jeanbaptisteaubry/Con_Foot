<?php

use App\class\Humain;
use PHPUnit\Framework\TestCase; // On importe la classe TestCase de PHPUnit


class TestHumain extends TestCase // On crée une classe qui hérite de TestCase
{
    public function testDonneTexte(): void
        // On crée une méthode qui teste la méthode donneTexte()
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30")); // On crée un objet Humain
        // On teste la méthode donneTexte() de l'objet Humain
        // Faire une assertion = affirmer que quelque chose est vrai
        $this->assertEquals("Humain Giroud Olivier date de naissance 30/09/1986", $giroud->donneTexte());
    }

    public function testGetNom(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Giroud", $giroud->getNom());
    }

    public function testGetPrenom(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("Olivier", $giroud->getPrenom());
    }

    public function testGetDateNaissance(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $this->assertEquals("1986-09-30", $giroud->getDateNaissance()->format("Y-m-d"));
    }

    public function testSetNom(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setNom("Giroud2");
        $this->assertEquals("Giroud2", $giroud->getNom());
    }

    public function testSetPrenom(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setPrenom("Olivier2");
        $this->assertEquals("Olivier2", $giroud->getPrenom());
    }

    public function testSetDateNaissance(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setDateNaissance(new DateTime("1986-09-29"));
        $this->assertEquals("1986-09-29", $giroud->getDateNaissance()->format("Y-m-d"));
    }

    public function testAll(): void
    {
        $giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
        $giroud->setNom("Giroud2");
        $this->assertEquals("Giroud2", $giroud->getNom());
        $giroud->setPrenom("Olivier2");
        $this->assertEquals("Olivier2", $giroud->getPrenom());
        $giroud->setDateNaissance(new DateTime("1986-09-29"));
        $this->assertEquals("1986-09-29", $giroud->getDateNaissance()->format("Y-m-d"));
        $this->assertEquals("Humain Giroud2 Olivier2 date de naissance 29/09/1986", $giroud->donneTexte());
    }
}

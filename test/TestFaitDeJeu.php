<?php

use App\class\Equipe;
use App\class\FaitDeJeu;
use App\class\Joueur;
use App\class\Selectionneur;
use PHPUnit\Framework\TestCase;

class TestFaitDeJeu extends    TestCase
{
    public function testAll(): void
    {
        $edf = new Equipe("France");
        $GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9, $edf);
        $DD= new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $edf);
      //  $MK= new Joueur("MBappé","Kylian", new DateTime("1998-12-20"), 10, $edf);

        $unFaitDeJeu = new FaitDeJeu(new DateTime("00:08:00"), $GO, "Se recoiffe !");
        $this->assertEquals("00:08:00", $unFaitDeJeu->getTemps()->format("H:i:s"));
        $this->assertEquals("Se recoiffe !", $unFaitDeJeu->getDescription());
        $this->assertEquals("Fait de jeu : 00:08:00 : Giroud Olivier Se recoiffe !", $unFaitDeJeu->donneTexte());
    }
}
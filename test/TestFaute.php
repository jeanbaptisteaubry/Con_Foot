<?php

use App\class\Equipe;
use App\class\Faute;
use App\class\Joueur;
use App\class\Selectionneur;
use \PHPUnit\Framework\TestCase;

class TestFaute extends TestCase
{
    public function testAll(): void
    {
        $edf = new Equipe("France");
        $GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9, $edf);
  //      $DD= new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $edf);
        $MK= new Joueur("MBappé","Kylian", new DateTime("1998-12-20"), 10, $edf);

        $croatie = new Equipe("Croatie");
        $Mandzukic= new Joueur("Mandzukic","Mario", new DateTime("1985-12-21"), 9, $croatie);
        $Modric= new Joueur("Modric","Luka", new DateTime("1985-09-09"), 10, $croatie);
        $faute1avecVictime = new Faute(new DateTime("00:08:00"), $GO, "faute 1", false, false, $Mandzukic);
        $this->assertEquals("00:08:00", $faute1avecVictime->getTemps()->format("H:i:s"));
        $this->assertEquals("faute 1", $faute1avecVictime->getDescription());
        $this->assertEquals(false, $faute1avecVictime->estJaune());
        $this->assertEquals(false, $faute1avecVictime->estRouge());
        $this->assertEquals("Faute : 00:08:00 : Giroud Olivier faute 1 Victime : Mandzukic Mario\n", $faute1avecVictime->donneTexte());

        $faute2sansVictime = new Faute(new DateTime("00:08:00"), $GO, "faute 2", false, false);
        $this->assertEquals("Faute : 00:08:00 : Giroud Olivier faute 2\n", $faute2sansVictime->donneTexte());
    }

}
<?php
use PHPUnit\Framework\TestCase;
use App\class\Equipe;
use App\class\Selectionneur;
class TestEquipe extends TestCase
{
    public function testAll(): void
    {
        $uneEquipe = new Equipe("Brésil");
        $this->assertEquals("Brésil", $uneEquipe->getPays());
        $uneEquipe->SetPays("France");
        $this->assertEquals("France", $uneEquipe->getPays());
        $unSelectionneur = new Selectionneur("Didier", "Deschamps", new DateTime("1968-04-15"), $uneEquipe);
     //   $uneEquipe->setEstEntrainee($unSelectionneur);
        $this->assertEquals("Sélectionneur : Didier Deschamps", $uneEquipe->getEstEntrainee()->donneTexte());
        $this->assertEquals("Equipe : France Sélectionneur : Didier Deschamps", $uneEquipe->donneTexte());
    }

}
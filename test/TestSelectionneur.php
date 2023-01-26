<?php

use App\class\Selectionneur;

class TestSelectionneur extends \PHPUnit\Framework\TestCase
{

    public function testAll(): void
    {
        $unSelectionneur = new Selectionneur("Didier", "Deschamps", new DateTime("1968-04-15"));
        $this->assertEquals("Didier", $unSelectionneur->getNom());
        $unSelectionneur->setNom("Zinédine");
        $this->assertEquals("Zinédine", $unSelectionneur->getNom());
        $this->assertEquals("Selectionneur : Zinédine Deschamps", $unSelectionneur->donneTexte());
    }
}
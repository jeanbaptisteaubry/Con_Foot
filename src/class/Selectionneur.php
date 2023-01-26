<?php
namespace App\class;

use DateTime;

class Selectionneur extends Humain
{
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
    }

    public function donneTexte(): string
    {
        return "Selectionneur : ".$this->getNom()." ".$this->getPrenom();
    }
}
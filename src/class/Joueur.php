<?php
namespace App\class;
use DateTime;

class Joueur extends Humain
{
    private int $numeroMaillot;

    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, int $numeroMaillot)
    {
        $this->numeroMaillot = $numeroMaillot;
        parent::__construct($nom, $prenom, $dateNaissance);
    }

    public function getNumeroMaillot(): int
    {
        return $this->numeroMaillot;
    }

    public function setNumeroMaillot(int $numeroMaillot): void
    {
        $this->numeroMaillot = $numeroMaillot;
    }

    public function donneTexte(): string
    {
        return "Joueur : ".$this->getNom()." ".$this->getPrenom()." numéro : ".$this->getNumeroMaillot();
    }

}
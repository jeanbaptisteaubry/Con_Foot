<?php
namespace App\class;
use DateTime;

class Arbitre extends Humain
{
    private string $pays;

    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, string $pays)
    {
        $this->pays = $pays;
        parent::__construct($nom, $prenom, $dateNaissance);
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    //Fonction qui permet d'afficher les informations de l'Arbitre
    //Elle surcharge la fonction donneTexte() de la classe Humain
    public function donneTexte(): string
    {
        return "Arbitre : ".$this->getNom()." ".$this->getPrenom()." nationalité : ".$this->getPays();
    }
}
<?php

namespace App\class;
use DateTime;
class FaitDeJeu extends Evenement
{
    private Joueur $auteur;
    private string $description; //Propriété ajoutée pour la description du fait de jeu

    public function __construct(DateTime $temps, Joueur $auteur, string $description)
    {
        parent::__construct($temps); //Comme un fait de jeu est aussi un évènement, on le construit en tant qu'évènement !

        //Construction spécifique en tant que fait de jeu
        $this->auteur = $auteur;
        $this->description = $description;
    }

    public function getAuteur(): Joueur
    {
        return $this->auteur;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function donneTexte(): string
    {
        return "Fait de jeu : ".$this->getTemps()->format("H:i:s")." : " .$this->getAuteur()->getNom() ." ".$this->getAuteur()->getPrenom()." ".$this->getDescription();
    }
}
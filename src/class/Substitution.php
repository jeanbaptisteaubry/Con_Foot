<?php

namespace App\class;

class Substitution extends Evenement
{
    private Joueur $sortant;
    private Joueur $entrant;

    public function __construct(\DateTime $temps, Joueur $sortant, Joueur $entrant)
    {
        parent::__construct($temps);
        $this->sortant = $sortant;
        $this->entrant = $entrant;
    }

    public function getSortant(): Joueur
    {
        return $this->sortant;
    }

    public function getEntrant(): Joueur
    {
        return $this->entrant;
    }

    public function donneTexte(): string
    {
        return "Substitution ".$this->getTemps()->format("H:i:s")." : " . $this->sortant->getNom() . " " . $this->sortant->getPrenom() . " sort, " . $this->entrant->getNom() . " " . $this->entrant->getPrenom() . " entre\n";
    }


}
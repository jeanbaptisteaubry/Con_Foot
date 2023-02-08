<?php
namespace App\class;

class Faute extends FaitDeJeu
{
    private bool $cartonJaune;
    private bool $cartonRouge;
    private ?Joueur $victime;
    //Pas description car héritée de FaitDeJeu

    public function __construct(\DateTime $temps, Joueur $auteur, string $description, bool $cartonJaune, bool $cartonRouge, ?Joueur $victime = null)
    {
        parent::__construct($temps, $auteur, $description);
        $this->cartonJaune = $cartonJaune;
        $this->cartonRouge = $cartonRouge;
        $this->victime = $victime;
    }

    public function estJaune(): bool
    {
        return $this->cartonJaune;
    }

    public function estRouge(): bool
    {
        return $this->cartonRouge;
    }

    public function getVictime(): ?Joueur
    {
        return $this->victime;
    }

    public function donneTexte(): string
    {
        $texte = "Faute : ".$this->getTemps()->format("H:i:s")." : " .$this->getAuteur()->getNom() ." ".$this->getAuteur()->getPrenom()." ".$this->getDescription();
        if ($this->estJaune()) {
            $texte .= " Carton jaune";
        }
        if ($this->estRouge()) {
            $texte .= " Carton rouge";
        }
        if ($this->getVictime() != null) {
            $texte .= " Victime : " . $this->getVictime()->getNom() . " " . $this->getVictime()->getPrenom();
        }
        return $texte."\n";
    }


}
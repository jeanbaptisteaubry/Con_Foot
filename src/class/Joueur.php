<?php
namespace App\class;
use DateTime;

class Joueur extends Humain
{
    private int $numeroMaillot;

    private Equipe $equipe;
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, int $numeroMaillot, Equipe $equipe)
    {
        //Test numéro de maillot entre 1 et 27
        // SI PAS ENTRE 1 ET 27
        if(!($numeroMaillot >= 1 && $numeroMaillot <= 27)){
            throw new \Exception("Le numéro de maillot doit être compris entre 1 et 27");
        }

        parent::__construct($nom, $prenom, $dateNaissance);
        $this->equipe = $equipe;
        //Risque d'incohérence ! il faut que le joueur soit dans l'équipe !
        $equipe->ajouterJoueur($this);

        $this->numeroMaillot = $numeroMaillot;

    }

    public function getEquipe(): Equipe
    {
        return $this->equipe;
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
        return "Joueur : ".$this->getNom()." ".$this->getPrenom()." numéro : ".$this->getNumeroMaillot() ." Equipe : ".$this->getEquipe()->getPays();
    }

}
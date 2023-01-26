<?php

namespace App\class;

class Equipe
{
    private array $listeJoueurs;
    private string $pays;
    private ?Selectionneur $estEntrainee;//Selectionneur peut ne pas avoir de valeur

    public function __construct(string $pays)
    {
        $this->pays = $pays;
        $this->listeJoueurs = []; //on initialise la liste des joueurs à vide
        $this->estEntrainee = null;  // pas de sélectionneur au départ
    }

    public function getListeJoueurs(): array
    {
        return $this->listeJoueurs;
    }

    public function ajouterJoueur(Joueur $joueur): void
    {

        //il y a différents risques : doublon !
        //il faut aussi que le joueur soit dans l'équipe !
        if($joueur->getEquipe() != $this)
        {
            //Incohérence, un objet joueur ne peut être changé d'équipe
            //=> Erreur dans le code : Exception !
        }
        //Traitement des doublons :
        // Soit on ajoute 2 fois le même joueur,
        // soit on ajoute un joueur qui est déjà créé d'autrepart
        // mais qui n'est pas la même instance
        if(array_search($joueur, $this->listeJoueurs) != false)
        {
            //Il a été trouvé, il y a un doublon
            //=> Erreur dans le code : Exception !
        }
        //On va programmer à la main la rechercher de valeur !
        foreach($this->listeJoueurs as $joueurEquipe)
        {
            if($joueurEquipe->getNom() == $joueur->getNom() &&
                $joueurEquipe->getPrenom() == $joueur->getPrenom() &&
                $joueurEquipe->getDateNaissance() == $joueur->getDateNaissance())
            {
                //Il y a un doublon
                //=> Erreur dans le code : Exception !
            }
        }

        //Aucune anomalie de détectée, on peut ajouter le joueur
        $this->listeJoueurs[] = $joueur; //Ajout du joueur à l'équipe
    }

    public function donneTexte(): string
    {
        $texte = "";
        if ($this->estEntrainee == null) {
            $texte .= "Equipe : " . $this->getPays() . " sans sélectionneur";
        } else {
            $texte .=  "Equipe : " . $this->getPays() . " " . $this->getEstEntrainee()->donneTexte();
        }
        if(count($this->listeJoueurs) > 0)
        {
            $texte .= " composée de : ";
            foreach($this->listeJoueurs as $joueur)
            {
                $texte .= $joueur->getNom()." ".$joueur->getPrenom().", ";
            }
        }

        return $texte;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    public function getEstEntrainee(): Selectionneur
    {
        return $this->estEntrainee;
    }

    public function setEstEntrainee(Selectionneur $estEntrainee): void
    {
        $this->estEntrainee = $estEntrainee;
        //il y a un risque d'incohérence !!!
        if ($estEntrainee->getEntraine() != $this) {
            $estEntrainee->setEntraine($this);
        }
    }
}
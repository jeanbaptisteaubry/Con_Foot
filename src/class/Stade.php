<?php
namespace App\class;
class Stade
{
    private string $nom;
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function donneTexte(): string
    {
        return "Stade : ".$this->getNom();
    }

}
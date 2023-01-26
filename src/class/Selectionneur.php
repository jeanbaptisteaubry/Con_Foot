<?php
namespace App\class;

use DateTime;
use App\class\Equipe;
class Selectionneur extends Humain
{
    private Equipe $entraine;
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance, Equipe $entraine)
    {
        $this->entraine = $entraine;

        // on dit à l'équipe qu'elle est entraînée par ce sélectionneur
        $entraine->setEstEntrainee($this);

        parent::__construct($nom, $prenom, $dateNaissance);
    }

    public function getEntraine(): Equipe
    {
        return $this->entraine;
    }

    public function setEntraine(Equipe $entraine): void
    {
        $this->entraine = $entraine;
        //il y a aussi un risque d'incohérence !!!
        if($entraine->getEstEntrainee() != $this)
        {
            $entraine->setEstEntrainee($this);
        }
    }

    public function donneTexte(): string
    {
        return "Sélectionneur : ".$this->getNom()." ".$this->getPrenom();
    }
}
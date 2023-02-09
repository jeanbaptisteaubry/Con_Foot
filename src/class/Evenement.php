<?php
namespace App\class;
use DateTime;

class Evenement
{
    private DateTime $temps;

    public function __construct(DateTime $temps)
    {
        //Le temps ne doit pas dépasser 90 minutes
        $dureeEnMinute =  $temps->format("H") * 60 + $temps->format("i") ;
        if($dureeEnMinute> 90 || $dureeEnMinute < 0){
            throw new \Exception("Le temps doit être compris entre 0 et 90 minutes");
        }
        $this->temps = $temps;
    }

    public function getTemps(): DateTime
    {
        return $this->temps;
    }

    public function donneTexte(): string
    {
        return "Evenement : ".$this->getTemps()->format("H:i:s")."\n";
    }
}
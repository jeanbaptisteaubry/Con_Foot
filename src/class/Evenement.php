<?php
namespace App\class;
use DateTime;

class Evenement
{
    private DateTime $temps;

    public function __construct(DateTime $temps)
    {
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
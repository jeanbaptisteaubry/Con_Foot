<?php
Namespace App\class;
class But extends FaitDeJeu
{
    private Equipe $auProfitDe;
    private bool $surPenalty;

    public function __construct(\DateTime $temps, Joueur $auteur, string $description, Equipe $auProfitDe, bool $surPenalty)
    {
        parent::__construct($temps, $auteur, $description);
        $this->auProfitDe = $auProfitDe;
        $this->surPenalty = $surPenalty;
    }

    public function getAuProfitDe(): Equipe
    {
        return $this->auProfitDe;
    }

    public function estSurPenalty(): bool
    {
        return $this->surPenalty;
    }

    public function donneTexte(): string
    {

        $texte = "But : " . $this->getTemps()->format("H:i:s") . " : " . $this->getAuteur()->getNom() . " " . $this->getAuteur()->getPrenom() . " " . $this->getDescription() . " au profit de " . $this->getAuProfitDe()->getPays();
        if ($this->estSurPenalty()) {
            $texte .= " sur penalty";
        }

        //On va détecter les buts contre son camps
        if ($this->getAuteur()->getEquipe() != $this->getAuProfitDe()) {
            $texte .= " contre son camp";
        }

        return $texte . "\n";
    }
}
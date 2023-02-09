<?php
namespace App\class;
use DateTime;

class Jeu
{
    private Equipe $equipeDomicile;
    private Equipe $equipeExterieur;
    private Arbitre $arbitre;
    private array $listeRemplacements = [];
    private array $listeFautes = [];
    private array $listeButs = [];
    private array $listeFaitDeJeu = []; //oublié sur le schéma !
    private DateTime $horaire;
    private Stade $stadeMatch;
    private array $listeTitulaires = [];

    public function __construct(DateTime $horaire, Equipe $equipeDomicile, Equipe $equipeExterieur, Arbitre $arbitre,  Stade $stadeMatch, array $listeTitulaires)
    {
        $this->equipeDomicile = $equipeDomicile;
        $this->equipeExterieur = $equipeExterieur;
        $this->arbitre = $arbitre;
        $this->horaire = $horaire;
        $this->stadeMatch = $stadeMatch;
        $this->listeTitulaires = $listeTitulaires;
    }

    public function ajouterFaitDeJeu(FaitDeJeu $faitDeJeu): void
    {
        $this->listeFaitDeJeu[] = $faitDeJeu;
    }

    public function ajouterSubstitution(Joueur $sortant, Joueur $entrant, DateTime $temps): void
    {
        //Le joueur sortant est bien sur le terrain
        if(!in_array($sortant, $this->donneListeJoueursSurLeTerraion())){
            throw new \Exception("Le joueur sortant n'est pas sur le terrain");
        }

        //Le joueur entrant n'est pas sur le terrain
        if(in_array($entrant, $this->donneListeJoueursSurLeTerraion())){
            throw new \Exception("Le joueur entrant est déjà sur le terrain");
        }
        $this->listeRemplacements[] = new Substitution($temps, $sortant, $entrant);
    }

    public function ajouterFaute(Joueur $joueurFauteur, ?Joueur $joueurVictime, DateTime $temps, string $description, bool $estJaune, bool $estRouge): void
    {
        $this->listeFautes[] = new Faute($temps, $joueurFauteur, $description,  $estJaune, $estRouge, $joueurVictime);
    }

    public function ajouterBut(Joueur $auteur, DateTime $temps, string $description, Equipe $auProfitDe, bool $surPenalty): void
    {
        $this->listeButs[] = new But($temps, $auteur, $description, $auProfitDe, $surPenalty);
    }

    public function donneScoreEquipeDomicile():int{
        $score = 0;
        foreach($this->listeButs as $but){
            if($but->getAuProfitDe() == $this->equipeDomicile){
                $score++;
            }
        }
        return $score;
    }

    public function donneScoreEquipeExterieur():int{
        $score = 0;
        foreach($this->listeButs as $but){
            if($but->getAuProfitDe() == $this->equipeExterieur){
                $score++;
            }
        }
        return $score;
    }

    public function donneListeJoueursSurLeTerraion(): array
    {
        //On crée la liste des joueurs
        $listeJoueurs = [];
        //Les titulaires sont forcément sur le terrain en début de jeu
        $listeJoueurs = array_merge($listeJoueurs, $this->listeTitulaires);

        //On va parcourir la liste des remplacements
        foreach ($this->listeRemplacements as $remplacement) {
            //On ajoute le joueur entrant
            $listeJoueurs[] = $remplacement->getEntrant();

            //On retire le joueur sortant
            $listeJoueurs = array_diff($listeJoueurs, [$remplacement->getSortant()]);
        }

        //On va sortir les cartons rouges
        foreach ($this->listeFautes as $faute) {
            if ($faute->estRouge()) {
                $listeJoueurs = array_diff($listeJoueurs, [$faute->getAuteur()]);
            }
        }

        //On va sortir les joueurs qui ont pris 2 cartons jaunes
        $listeJoueursAvecCartonsJaunes = [];
        foreach ($this->listeFautes as $faute) {
            if ($faute->estJaune()) {
                if(in_array($faute->getAuteur(), $listeJoueursAvecCartonsJaunes)){
                    $listeJoueurs = array_diff($listeJoueurs, [$faute->getAuteur()]);
                }else{
                    $listeJoueursAvecCartonsJaunes[] = $faute->getAuteur();
                }
            }
        }

        return $listeJoueurs;
    }

    public function donneTexte(): string
    {
        $texte = "Match de " . $this->equipeDomicile->getPays() . " contre " . $this->equipeExterieur->getPays() . " arbitré par " . $this->arbitre->getNom() . " " . $this->arbitre->getPrenom() . " à " . $this->stadeMatch->getNom() . " le " . $this->horaire->format("d/m/Y") . " à " . $this->horaire->format("H:i:s") . "\n";
        // Pour avoir un afficher trier, on va mettre les faits de jeu dans un tableau
        $tableauEvenement = array_merge($this->listeRemplacements, $this->listeFautes, $this->listeButs);
        // On trie le tableau
        usort($tableauEvenement,
            function ($a, $b) { //Fonction de comparaison
                return $a->getTemps() > $b->getTemps(); //On compare les temps
                    // retourne 1 si $a est avant $b, 0 sinon
            }
        );

        foreach ($tableauEvenement as $evenement) {
            $texte .= $evenement->donneTexte() . "\n";
        }

        /*
        foreach ($this->listeRemplacements as $remplacement) {
            $texte .= $remplacement->donneTexte();
        }
        foreach ($this->listeFautes as $faute) {
            $texte .= $faute->donneTexte();
        }
        foreach ($this->listeButs as $but) {
            $texte .= $but->donneTexte();
        }*/
        return $texte;
    }


}
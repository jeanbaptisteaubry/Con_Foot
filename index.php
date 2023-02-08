<?php
include_once "vendor/autoload.php";
use App\class\Equipe;
use App\class\Joueur;
use App\class\Selectionneur;
use App\class\Substitution;
use App\class\Faute;
use App\class\Evenement;
$edf = new Equipe("France");

$GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9, $edf);


$DD= new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $edf);

$MK= new Joueur("MBappé","Kylian", new DateTime("1998-12-20"), 10, $edf);

$faitDeJeu = new \App\class\FaitDeJeu(new DateTime("00:08:00"), $GO, "Se recoiffe !");


$remp = new Substitution(new DateTime("00:10:00"), $GO, $MK);

echo $remp->donneTexte();

$event = new Evenement(new DateTime("0:08:00"));

echo  $event->donneTexte();

//    Résultat dans la console :

//        8:00

$NF= new Joueur("Fekir","Nabil ", new DateTime("1993-06-18"), 10, $edf);

$sub = new Substitution (new DateTime("01:21:00"), $NF, $GO);

echo $sub->donneTexte();

//    Résultat dans la console :

//        81' : Entrant : Fékir Nabil , Sortant : Giroud Olivier

$KN = new Joueur("Kante","NGolo", new DateTime("1991-03-29"), 13, $edf);

$ft1 = new Faute(new DateTime("0:27:00"), $KN, "mauvais geste", true, false,  );
echo $ft1->donneTexte();
//    Résultat dans la console :

//        27' : Carton jaune : Ngole Kanté : Mauvais geste

$cro = new Equipe ("Croatie");

$CRPI= new Joueur("Perisic","Ivan", new DateTime("1900-01-01"),  4, $cro);

$ft2 = new Faute(new DateTime("0:27:00"), $KN,"mauvais geste",  true, false, $CRPI);

echo $ft2->donneTexte();

//    Résultat dans la console :

//        27' : Carton jaune : Ngole Kanté sur Perisic Ivan : Mauvais geste

$HL = new Joueur("Hernandez","Lucas", new DateTime("1900-01-01"), 21, $edf);

$CRML = new Joueur("Modric","Luca", new DateTime("1900-01-01"),  10, $cro);

$ft3 = new Faute(new DateTime("00:03:00"), $CRML ,"très très mauvais geste de futur rageux",false, false,   $HL );

echo $ft3->donneTexte();

//    Résultat dans la console :

//        3' : Faute : Modric Luca sur HernandezLucas : très très mauvais geste de futur rageux
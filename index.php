<?php
include_once "vendor/autoload.php";
use App\class\Equipe;
use App\class\Joueur;
use App\class\Selectionneur;
use App\class\Substitution;

$edf = new Equipe("France");

$GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9, $edf);


$DD= new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $edf);

$MK= new Joueur("MBappé","Kylian", new DateTime("1998-12-20"), 10, $edf);

$faitDeJeu = new \App\class\FaitDeJeu(new DateTime("00:08:00"), $GO, "Se recoiffe !");


$remp = new Substitution(new DateTime("00:10:00"), $GO, $MK);

echo $remp->donneTexte();
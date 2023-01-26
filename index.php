<?php
include_once "vendor/autoload.php";

use App\class\Equipe;
use App\class\Selectionneur;
use App\class\Joueur;
$edf = new Equipe("France");

echo $edf->donneTexte();
echo "\n";
//    Résultat dans la console :

//        Equipe : France

$GO= new Joueur("Giroud","Olivier", new DateTime("1986-09-30"), 9, $edf);

echo $GO->donneTexte();
echo "\n";
//     Résultat dans la console :

//        n°9 Giroud Olivier

$DD= new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $edf);

echo $DD->donneTexte();
echo "\n";
//     Résultat dans la console :

//        Deschamps Didier

echo $edf->donneTexte();
echo "\n";
//    Résultat dans la console :

//        Equipe : France

//        Sélectionneur : Deschamps Didier

//        Liste des joueurs :

//            n°9 Giroud Olivier

$MK= new Joueur("MBappé","Kylian", new DateTime("1998-12-20"), 10, $edf);

echo $edf->donneTexte();
echo "\n";
//    Résultat dans la console :

//        Equipe : France

//        Sélectionneur : Deschamps Didier

//        Liste des joueurs :

//            n°9 Giroud Olivier

//            n°10 MBappé Kylian


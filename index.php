<?php

use App\class\Arbitre;
use App\class\Equipe;
use App\class\Joueur;
use App\class\Selectionneur;
use App\class\Stade;
use App\class\Jeu;

require_once "vendor/autoload.php";
$stade = new Stade ("Luzhniki Arena (Moscou)");
$EqFR= new Equipe ("France");

$EqFR->setEstEntrainee(new Selectionneur("Deschamps","Didier", new DateTime("1969-08-15"), $EqFR));

$FR9= new Joueur("Giroud","O", new DateTime("1900-01-01"), 9, $EqFR);

$FR7= new Joueur("Griezmann","A", new DateTime("1900-01-01"), 7, $EqFR);

$FR21= new Joueur("Hernandez","Lucas", new DateTime("1900-01-01"), 21, $EqFR);

$FR13= new Joueur("Kante","NBGolo", new DateTime("1900-01-01"), 13, $EqFR);

$FR1= new Joueur("Lloris","Hugo", new DateTime("1900-01-01"), 1, $EqFR);

$FR14= new Joueur("Matuidi","Blaise", new DateTime("1900-01-01"), 14, $EqFR);

$FR10= new Joueur("Mbappe","K", new DateTime("1900-01-01"), 10, $EqFR);

$FR2= new Joueur("Pavard","B", new DateTime("1900-01-01"), 2, $EqFR);

$FR6= new Joueur("Pogba","P", new DateTime("1900-01-01"), 6, $EqFR);

$FR5= new Joueur("Umtiti","S.", new DateTime("1900-01-01"), 5, $EqFR);

$FR4= new Joueur("Varane"," R.", new DateTime("1900-01-01"), 4, $EqFR);

$FR23= new Joueur("Areola","A", new DateTime("1900-01-01"), 23, $EqFR);

$FR11= new Joueur("Dembele","O", new DateTime("1900-01-01"), 11, $EqFR);

$FR18= new Joueur("Fekir","N", new DateTime("1900-01-01"), 18, $EqFR);

$FR3= new Joueur("Kimpembe","P", new DateTime("1900-01-01"), 3, $EqFR);

$FR8= new Joueur("Lemar","T", new DateTime("1900-01-01"), 8, $EqFR);

$FR16= new Joueur("Mandanda","S.", new DateTime("1900-01-01"), 16, $EqFR);

$FR22= new Joueur("Mendy","B", new DateTime("1900-01-01"), 22, $EqFR);

$FR15= new Joueur("N'Zonzi","S.", new DateTime("1900-01-01"), 15, $EqFR);

$FR17= new Joueur("Rami","A", new DateTime("1900-01-01"), 17, $EqFR);

$FR19= new Joueur("Sidibe","D", new DateTime("1900-01-01"), 19, $EqFR);

$FR20= new Joueur("Thauvin","F", new DateTime("1900-01-01"), 20, $EqFR);

$FR12= new Joueur("Tolisso","C", new DateTime("1900-01-01"), 12, $EqFR);

$EqCR= new Equipe ("Croatie");
$EqCR->setEstEntrainee(new Selectionneur("Looser","Perdant", new DateTime("1969-08-15"), $EqCR));
$CR11= new Joueur("Brozovic","M", new DateTime("1900-01-01"), 11,  $EqCR);
$CR6= new Joueur("Lovren","D", new DateTime("1900-01-01"), 6,  $EqCR);
$CR17= new Joueur("Mandzukic","M", new DateTime("1900-01-01"), 17,  $EqCR);
$CR10= new Joueur("Modric","L", new DateTime("1900-01-01"), 10,  $EqCR);
$CR4= new Joueur("Perisic","I", new DateTime("1900-01-01"), 4,  $EqCR);
$CR7= new Joueur("Rakitic","I", new DateTime("1900-01-01"), 7,  $EqCR);
$CR18= new Joueur("Rebic","A", new DateTime("1900-01-01"), 18,  $EqCR);
$CR3= new Joueur("Strinic","I", new DateTime("1900-01-01"), 3,  $EqCR);
$CR23= new Joueur("Subasic","D", new DateTime("1900-01-01"), 23,  $EqCR);
$CR21= new Joueur("Vida","D", new DateTime("1900-01-01"), 21,  $EqCR);
$CR2= new Joueur("Vrsaljko","S", new DateTime("1900-01-01"), 2,  $EqCR);
$CR19= new Joueur("Badelj","M", new DateTime("1900-01-01"), 19,  $EqCR);
$CR14= new Joueur("Bradaric","F", new DateTime("1900-01-01"), 14,  $EqCR);
$CR15= new Joueur("Caleta-Car","D", new DateTime("1900-01-01"), 15,  $EqCR);
$CR5= new Joueur("Corluka","V", new DateTime("1900-01-01"), 5,  $EqCR);
$CR13= new Joueur("Jedvaj","T", new DateTime("1900-01-01"), 13,  $EqCR);
$CR12= new Joueur("Kalinic","L", new DateTime("1900-01-01"), 12,  $EqCR);
$CR8= new Joueur("Kovacic","M", new DateTime("1900-01-01"), 8,  $EqCR);
$CR9= new Joueur("Kramaric","A", new DateTime("1900-01-01"), 9,  $EqCR);
$CR1= new Joueur("Livakovic","D", new DateTime("1900-01-01"), 1,  $EqCR);
$CR22= new Joueur("Pivaric","J", new DateTime("1900-01-01"), 22,  $EqCR);
$CR20= new Joueur("Pjaca","M", new DateTime("1900-01-01"), 20,  $EqCR);
$listeTitulaire = [];
$listeTitulaire[] = $FR9;
$listeTitulaire[] = $FR7;
$listeTitulaire[] = $FR21;
$listeTitulaire[] = $FR13;
$listeTitulaire[] = $FR1;
$listeTitulaire[] = $FR14;
$listeTitulaire[] = $FR10;
$listeTitulaire[] = $FR2;
$listeTitulaire[] = $FR6;
$listeTitulaire[] = $FR5;
$listeTitulaire[] = $FR4;
$listeTitulaire[] = $FR23;


$listeTitulaire[] = $CR11;
$listeTitulaire[] = $CR6;
$listeTitulaire[] = $CR17;
$listeTitulaire[] = $CR10;
$listeTitulaire[] = $CR4;
$listeTitulaire[] = $CR7;
$listeTitulaire[] = $CR18;
$listeTitulaire[] = $CR3;
$listeTitulaire[] = $CR23;
$listeTitulaire[] = $CR21;
$listeTitulaire[] = $CR2;

$arb = new Arbitre ("Pitana ","Nestor", new DateTime("1975-06-17"), "Argentin");
$finale = new Jeu (new DateTime("2018-07-15 17:00:00"), $EqFR,  $EqCR, $arb , $stade , $listeTitulaire);
$finale->ajouterBut($CR17, new DateTime("0:18:00"), "CSC", $EqFR,false);
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        1 - 0

$finale->ajouterBut($CR4,new DateTime("0:28:00"), "en action", $EqCR,false   );
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        1 - 1

$finale->ajouterBut($FR7,new DateTime("0:38:00"), "grizou",  $EqFR, true);
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        2 - 1

$finale->ajouterBut($FR6,new DateTime("0:59:00"), "pogba !!!", $EqFR, false  );
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        3 - 1

$finale->ajouterBut($FR10,new DateTime("1:05:00"), "kiki",$EqFR, false  );
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        4 - 1

$finale->ajouterBut( $CR17,new DateTime("1:28:00"), "bavure", $EqCR, false);
echo "{$finale->donneScoreEquipeDomicile()}-{$finale->donneScoreEquipeExterieur()}\n";
//    Résultat dans la console :

//        4 - 2

echo($finale->donneTexte(true));

//    Résultat dans la console :

//        Equipe domicile : France

//        Sélectionneur : Deschamps Didier

//         Titulaires:

//         1 Lloris L

//        ... toute la liste !

//        4 Varane R

//         Remplaçants:

//          23 Aerola A

//        Toute la liste

//        Equipe Extérieure : Croatie

//        Sélectionneur : ...

//         Titulaires:

//        ... toute la liste !

//         Remplaçants:

//        ... Toute la liste !

// Faits de jeu :

//       18' : but pour France - Mandzukic Mario (CSC)

//       28' : but pour Croatie - Perisic I

//       38' : but pour France - Griezmann A (Penalty)

//       59' : but pour France - Pogba P

//       65' : but pour France - Mbappé K

//       69' : but pour Croatie - Manzukic M


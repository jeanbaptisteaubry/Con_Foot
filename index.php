<?php
include_once "vendor/autoload.php";

use App\class\Humain;
$giroud = new Humain("Giroud", "Olivier", new DateTime("1986-09-30"));
echo $giroud->getNom()."\n";
echo $giroud->getPrenom()."\n";
echo $giroud->getDateNaissance()->format("d/m/Y")."\n";
echo $giroud->donneTexte()."\n";


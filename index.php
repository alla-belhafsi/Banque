<h1>Exercice Banque</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

// Titulaires
$tit1 = new Titulaire("MURMANN", "Mickael", "13-12-1988", "STRASBOURG");
$tit2 = new Titulaire("MATTHIEU", "Quentin", "17-04-1988", "STRASBOURG");
$tit3 = new Titulaire("SCHMIDT", "Marina", "05-04-1992", "MONTPELLIER");

// Comptes
$com1 = new Compte("Compte courant", 824, "€", $tit1);
$com2 = new Compte("Compte courant", 654, "€", $tit2);
$com3 = new Compte("Compte courant", 133, "€", $tit3);
$com4 = new compte("Livret A", 924, "€", $tit3);

// Crediter/Debiter
//$com1->crediter(50);
//$com4->crediter(50);

// Echos
echo $tit1->afficherTitcompte();
echo $tit2->afficherTitcompte();
echo $tit3->afficherTitcompte();

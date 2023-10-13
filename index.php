<h1>Exercice Banque</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

// Titulaires
$tit1 = new Titulaire("MURMANN", "Mickael", "13-12-1988", "STRASBOURG");
$tit2 = new Titulaire("MATTHIEU", "Quentin", "17-04-1988", "STRASBOURG");
$tit2 = new Titulaire("SCHMIDT", "Marina", "05-04-1992", "MONTPELLIER");

// Comptes

// Echos
echo $tit1;
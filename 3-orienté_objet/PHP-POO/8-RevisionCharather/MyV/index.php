<?php

//sert à importer le fichier php
require_once 'classes/Personnage.php';

//instancier un nouvel objet
$merlin = new Personnage('Merlin');
$merlin->vie = 50;
$merlin->attaque=40;

$merlin->heal(20);

//afficher l'objet
var_dump($merlin);


$arthur= new Personnage('Arthur');
// mettre pour arthur la valeur 120 pour la propriéte vie et 10 pour attaque
$arthur->vie = 20;
$arthur->attaque= 10;
echo '<br>';

var_dump($arthur);
echo '<br>';
$arthur->regenerer();
var_dump($arthur);
$arthur->afficher();
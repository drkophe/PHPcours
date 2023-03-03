<?php

include 'Example.php'; // on peut utiliser require_once aussi


// instanciation de la classe à 2 reprises
$example1 = new Example('1234', 'bosi', 'lorenzo', '22/08/2000', 'Bourg-la-Reine');

$example2 = new Example('56789', 'doe', 'john', '10/12/2013', 'Paris');


// affichage
var_dump($example1);
var_dump($example2);


?>

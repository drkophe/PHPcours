<?php
//exo1: parcour d'un tableau

$color=['vert', 'bleu', 'rouge'];

foreach($color as $c){
    echo $c.'   ';
}
echo "<hr>";



//exo2: recherchede l'indice d'un element

//méthode1:
function search($val, array $tab)
{
    $taille= count($tab);
    for($i=0; $i< $taille; $i++){
        if ($val == $tab[$i]){
            return $i; // si trouvé une seule fois on sort de la fonction
        }
    }
    return " valeur non trouvée";
}
echo search('blanc', $color);



//2éme méthode:
$indice= array_search('vert', $color);

if ($indice === false ){
    echo " valeur non trouvée";
}
else{
    echo $indice;
}



//Exo3: création d'un tableau

function create($n){
    $tab=[];
    for($i=0; $i<=$n ; $i++){
        $tab[$i]= $i;
    }
    return $tab;
}

$liste5= create(5);
foreach($liste5 as $l){
    echo $l.'<br>';
}


//exo4: somme d'un tableau
//1ére méthode:
echo array_sum($liste5).'<br>';


//2éme méthode:
$somme=0;
foreach($liste5 as $element){
    $somme +=$element;
}
echo $somme.'<br>';

//exo5: trie d'un tableau
$color=['vert', 'bleu', 'rouge'];

sort($color);
foreach($color as $c){
    echo $c.'   ';
}





//exo6: recherche dichotomique

$debut=0;
$fin = count($liste5);
$val=0;
$tab=$liste5;
while(true){
    if($debut > $fin){ // si j'ai parcouru tout le tableau
        echo "non trouvé";
        return -1;
    }
    $length=$debut-$fin;
    if ($length == 0){ //cas ou debut == fin c'est un seul element
        if($val == $tab[$debut]){
            echo "trouvé: $debut";
            return $debut;
        }
        else{ // debut == fin mais element non trouvé
            echo "non trouvé";
            return -1;
        }
    }

    //division du tableau en 2
    $mid= intval(($debut+$fin)/2);//contient le mileir à chaque itération. intval retourne l'entier du resultat de la division

    if($val < $tab[$mid]){ //prendre le premier sous tableau
        $fin= $mid-1;
    }
    elseif($val > $tab[$mid]){ // prendre la 2eme partie du tableau
        $debut = $mid+1;
    }
    else{ //val == tab[mid]
        echo "trouvé: $mid";
        return $mid;
    }

}

?>
<?php
// $number = 1;

// while ($number != 11){

//     $multiplication = 1;
//     $var_number = 1;

//     while ($var_number != ($number *10)){
//         $var_number = $number * $multiplication;
//         echo $number." x ".$multiplication." = ".$var_number."<br>";
//         $multiplication++;
//     }
//     $number++;
//     echo "<br><br>";
// }

////////////////////////////////////////////////

// for ($i = 1 ; $i <= 100; $i++){
//     if ($i % 3 == 0 && $i % 5 == 0){
//         echo $i." FizzBuzz<br>";
//     } elseif ($i % 5 == 0 && $i % 3 != 0){
//         echo $i." Buzz<br>";
//     } elseif ($i % 3 == 0 && $i % 5 != 0){
//         echo $i." Fizz<br>";
//     }
// }

// for ($i = 1 ; $i <= 100; $i++){
//     if ($i % 3 == 0){
//         echo $i." Fizz<br>";
//     }
//     if ($i % 5 == 0){
//         echo $i." Buzz<br>";
//     }
// }

// $departement = 1;
// while ($departement != 101){
//     echo "77".$departement."<br>";
//     $departement++;
// }

// for ($i = 0; $i <= 100; $i++){
//     echo "77".$i."<br>";
// }

/////////////////////////

// for ($i = 0; $i <= 20; $i += 2){
//     echo $i."<br>";
// }

// $number = 0;
// while ($number != 20){
//     $number += 2;
//     echo $number."<br>";  
// }

// for ($i = 1; $i <= 5; $i++){
//     echo ($i."<br>")*$i;
// }


// for ($i = 1; $i <= 5; $i++){
//     for ($x = 1; $x <= $i; $x++){
//         echo $i;
//     }
//     echo "<br>";
// }


// $taille = 1;
// for ($i = 1; $i <= 5; $i++){
//     echo $i;
// }


// $number = 0;
// while ($number != 0){

// }

// $n = 30;
// for ($i = 1 ; $i <= $n; $i++){
//     if ($i % 3 == 0){
//         echo $i."<br>";
//     }
// }

// $number = 1;
// for ($i = 1; $i <= $number; $i++){
//     if ($number % 1 == 0 && $number / $i == 1){
//         echo $number." est un nombre premier !<br>";
//     } else {
//         echo $number." n'est pas un nombre premier !<br>";
//     }
// }

// $number = 0;
// for ($i = 2; $i < $number; $i++){
//     if ($number % $i == 0){
//         echo $number." n'est pas un nombre premier.";
//         exit;
//     }
// }
// echo $number." est un nombre premier !";

// $number = 2;
// $is_prime = true;
// for ($i = 2; $i < $number; $i++){
//     if ($number % $i == 0){
//         $is_prime = false;
//         break;
//     }
// }
// if ($is_prime && $number > 1){
//     echo $number." est un nombre premier !";
// } else {
//     echo $number." n'est pas un nombre premier.";
// }

// function multiplication (){
//     echo "51 x 26 = ".(51*26)."<br>";
// };
// multiplication();


// function Bonjour (...$prenom){
//     foreach ($prenom as $p){
//         echo "Bonjour ".$p." !<br>";
//     }
// };
// Bonjour('Matilde','Imane','Martin','Léa');

// function factoriel ($n){
//     $resultat = 1;
//     for ($i = 1; $i <= $n ; $i++){
//         $resultat = $resultat*$i;
//     }
//     return $resultat;
// }
// echo factoriel(5);

// $x = null;
// function permut ($a,$b){
//     $x = $a;
//     $a = $b;
//     $b = $x;
//     echo $a."   ".$b."<br>"; 
// }
// echo permut(10,20);
// echo $x;

// function calculatrice_v2 ($x,$y,$operation){
//     $operateur = null;
//     if ($operation == 'addition'){
//         $operateur = '+';
//     } else if ($operation == 'multiplication'){
//         $operateur = '*';
//     }

//     return $x." ".$operateur." ".$y." = ".($x.$operateur.$y);
// }
// echo calculatrice_v2(2,5,'multiplication');

// function calculatrice ($x,$y,$operation){
//     $operateur = null;
//     $result = null;
//     if ($operation == 'addition'){
//         $operateur = '+';
//         $result = $x + $y;
//     } else if ($operation == 'multiplication'){
//         $operateur = 'x';
//         $result = $x * $y;
//     } else if ($operation == 'soustraction'){
//         $operateur = '-';
//         $result = $x - $y;
//     } else if ($operation == 'division'){
//         $operateur = '/';
//         $result = $x / $y;
//     }

//     return $x." ".$operateur." ".$y." = ".$result;
// }
// echo calculatrice(2,5,'soustraction');



// function factoriel ($n){
//     $resultat = 1;
//     for ($i = 1; $i <= $n ; $i++){
//         $resultat = $resultat*$i;
//     }
//     return $resultat;
// }
// echo factoriel(5);

// function coef ($p,$q){
//     $c = $p / $q + factoriel($q);
//     return $c;
// }
// echo coef(1,1);

// $color=array('vert','bleu','rouge');
// foreach ($color as $table) {
//     echo $table."<br>";
// }

// $n = 10;

// function create_tab ($number){
//     $tab = [];
//     while ($number == 0){
//         $tab[$number] = $number;
//         $number--;
//     }
//     foreach ($tab as $indice){
//         echo $indice."<br>";
//     }
// }
// echo create_tab($n);

$tab_exo = [20,30,10,40];

// function calcule ($tab){
//     $result = null;
//     for ($i=0; $i <= count($tab)-1; $i++){
//         $result += $tab[$i]; 
//     }
//     return $result;
// };

// echo calcule($tab_exo);

//marche pas

// function trie ($tab){
//     $count = 0;
//     $smaller = $tab[0];
//     foreach ($tab as $iteration){
//         while ($smaller == $tab[$iteration] && $count < count($tab)-1){
//             if ($tab[$iteration] < $tab[$iteration + $count]){
//                 $smaller = $tab[$iteration];
//             } else {
//                 $count++;
//             }
//         }
//     }
//     return $tab;
// }
// echo trie($tab_exo);


// sort($tab_exo,SORT_NUMERIC);
// foreach ($tab_exo as $i){
//     echo $i;
// }


// $max2=max($apprenants);
// $min2=min($apprenants);

// foreach($apprenants as $key => $val){
//     if($min2 == $val){
//         echo $key ." a ".$val. " de moyenne";
//     }
// }
// echo "<br>";
// foreach($apprenants as $key => $val){
//     if($max2 == $val){
//         echo $key ." a ".$val. " de moyenne";
//     }
// }


$apprenant = array (
    "Thamer" => 08.82,
    "Mohamed" => 12.14,
    "Mounira" => 12.00,
    "Samira" => 13.02,
    "Tarek" => 14.15,
    "Riadh" => 09.98,
    "Radhia" => 08.98,
    "Tkaya" => 10.00,
    "Taher" => 09.99,
    "Kaies" => 12.84
);

// sort($apprenant, SORT_NUMERIC);
echo "Notes trier par ordre croissant : <br>";
asort($apprenant);
foreach ($apprenant as $nom => $note){
    echo $nom." : ".$note."<br>";
}
echo "<br><br>";

echo "Notes au dessus de la moyenne : <br>";
foreach ($apprenant as $nom => $note){
    if ($note >= 10.00){
        echo $nom." : ".$note."<br>";
    }
}
echo "<br><br>";

echo "Notes en dessous de la moyenne : <br>";
foreach ($apprenant as $nom => $note){
    if ($note <= 10.00){
        echo $nom." : ".$note."<br>";
    }
}
echo "<br><br>";

$min = 0;
$max = count($apprenant);

echo "L'apprennant avec la meilleure moyenne est : <br>";
$best_note = 0;
$best_student = null;
foreach ($apprenant as $nom => $note){
    if ($note > $best_note){
        $best_note = $note;
        $best_student = $nom;
    }
}
echo $best_student." avec une moyenne de : ".$best_note;
echo "<br><br>";

echo "L'apprennant qui a la pire la moyenne est : <br>";
$worst_note = 20.00;
$worst_student = null;
foreach ($apprenant as $nom => $note){
    if ($note < $worst_note){
        $worst_note = $note;
        $worst_student = $nom;
    }
}
echo $worst_student." avec une moyenne de : ".$worst_note;
echo "<br><br>";


echo "La moyenne de la classe est : <br>";
$sommes = array_sum($apprenant) / count($apprenant);
echo $sommes;





// $color=array(0);
// foreach ($color as $table) {
//     echo $table."<br>";
// }
?>
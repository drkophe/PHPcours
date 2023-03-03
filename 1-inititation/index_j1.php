<?php
// il faut commenter ! 

// echo 'Bonjour';
// echo "l'exemple";
// echo '<h1> Titre </h1>';

/* commenter 
sur plusieurs
lignes */

// echo "<br>";

// echo "Il n'y a personne qui n'aime la souffrance pour elle-même, qui ne la recherche et qui ne la veuille pour 
// elle-même...";

// echo "<br>";

// $prenom = 'PHP';
// $age = 100;
// echo $age;

// echo "<br>";

// echo "la variable $age <br>";

// $age = 55;
// echo "la nouvelle variable $age <br>";

// var_dump($prenom);
// echo "<br>";
// echo gettype($prenom);

?>

<?php

$prenom = 'Kyrie Irving';
echo "Nom : $prenom";
echo "<br>";

$age = 30;
echo "$age ans";
echo "<br>";

$taille = 1.88;
echo "Taille : $taille";
echo "<br>";

echo gettype($prenom);
echo "<br>";
echo gettype($age);
echo "<br>";
echo gettype($taille);
echo "<br>";

echo "Je m'appelle ".$prenom." et j'ai ".$age." ans <br>";
echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
echo "Je m'appelle $prenom et j'ai $age ans <br>";

echo "Je m'appelle ".$prenom.", j'ai ".$age." ans et je mesure ".$taille."m";
echo "<br>";

$rectangle_L = 6;
$rectangle_l = 4;
$rectangleSurface = $rectangle_L * $rectangle_l;
echo "La surface d’un rectangle de longueur ".$rectangle_L." et de largeur ".$rectangle_l." est de : ".$rectangleSurface;
echo "<br>";

$trapeze_B = 6;
$trapeze_b = 4;
$trapeze_h = 8;
$trapezeSurface = ($trapeze_B + $trapeze_b) / 2 * $trapeze_h;
echo "La surface d’un trapèze de longueur ".$trapeze_B.", de largeur ".$trapeze_b." et de hauteur ".$trapeze_h.", est de : ".$rectangleSurface;
echo "<br>";


$pi = 3.14;
$R = 5;
$cercle_surface = $pi*$R;
echo "La sur
face d’un cercle ayant pour diamètre ".$R." est de : ".$cercle_surface;
echo "<br>";

$note_math = 18.5;
$note_français = 14.4;
$note_histoire_geo = 6.4;

$moyenne = ($note_français + $note_histoire_geo + $note_math) / 3;
echo "Ma moyenne est de ".$moyenne;
echo "<br>";

$age = 7;
if ($age <= 8) {
    echo "Bienvenue !";
} else {
    echo "Tu n'es pas le bienvenue ...";
};
echo "<br>";

$age = 9;
if ($age <= 8) {
    echo "Bienvenue !";
} else {
    echo "Tu n'es pas le bienvenue ...";
};
echo "<br>";

// $age = 10;
// if ($age < 12) :
//     echo "Salut gamin !";
// endif
echo "<br>";

// -----------------------  pas bon ------------------
// $age = 7;
// $autorisation = null;
// if ($age < 12){
//     $autorisation = false;
// } else {
//     $autorisation = true;
// };
// echo "Avez-vous l'autorisation d'entrer ? la réponse est : ".$autorisation;
// echo "<br>";

$age = 13;
$autorisation = $age > 12;
if ($autorisation){
    echo "Bienvenue !";
} else {
    echo "Tu n'es pas le bienvenue ...";
};
echo "<br>";
echo "Avez-vous l'autorisation d'entrer ? la réponse est : ".$autorisation;
echo "<br>";

$age = 9;
$autorisation = $age > 12;
if ($autorisation){
    echo "Bienvenue !";
} else {
    echo "Tu n'es pas le bienvenue ...";
};
echo "<br>";
echo "Avez-vous l'autorisation d'entrer ? la réponse est : ".$autorisation;
echo "<br>";


// $age = 7;
// if ($age <= 8) :
//     echo "Bienvenue !";
// else :
//     echo "Tu n'es pas le bienvenue ...";
// endif;
// echo "<br>";

// $age = 9;
// if ($age <= 8) :
//     echo "Bienvenue !";
// else :
//     echo "Tu n'es pas le bienvenue ...";
// endif;
// echo "<br>";

$note = 9;
if ($note >= 15){
    echo "Excellent ! <br>";
} else if ($note >= 10 && $note < 15 ){
    echo "Moyen <br>";
} else {
    echo "Médiocre <br>";
}

// $age = null;
// $inscrit = null;
// var_dump($age);

// if ($age >= 1){
//     $inscrit = $age > 18;
// }

// if ($inscrit){
//     echo "Utilisateur inscrit et majeur";
// } else if ($inscrit == false){
//     echo "Utilisateur inscrit et mineur";
// } else if ($inscrit == null){
//     echo "Utilisateur non inscrit, accès refusé";
// }


$age = 18;
$inscrit = true;

if ($age >= 18 AND $inscrit){
    echo "Utilisateur inscrit et majeur";
} else if ($age < 18 AND $inscrit){
    echo "Utilisateur inscrit et mineur";
} else if ($inscrit == false){
    echo "Utilisateur non inscrit, accès refusé";
}

echo "<br>";
echo "<br>";

// exo 1
$age = 11;
if ($age >= 6 && $age < 8){
    echo "Poussin";
} else if ($age == 8 || $age == 9){
    echo "Pupille";
} else if ($age == 10 XOR $age == 11){
    echo "Minime";
 }else if ($age >= 12){
    echo "Cadet";
}
echo "<br><br>";

//exo 2
$budget = 1553.89;
$achats = 1554.76;
if ($budget > $achats){
    echo "Notre budget de ".$budget." permet de payer la somme total de nos achats qui est de ".$achats;
} else {
    echo "Notre budget de ".$budget." ne nous permet pas de payer la somme total de nos achats qui est de ".$achats;
}
echo "<br><br>";

//exo 3
$heure = 16;
if ($heure > 5 && $heure < 12){
    echo "C'est le matin ! Good Morning";
} else if ($heure >= 12  && $heure < 21){
    echo "C'est l'après-midi ! Good Afternoon";
} else {
    echo "C'est le soir ! Go sleep please";
}
echo "<br><br>";

//exo 4
$facture = null;
$unites = 250;
$rest = null;
$sommes = null;
if ($unites <= 250){
    if ($unites <= 150){
        if ($unites <= 50){
            $facture = $unites * 3.50;
        } else {
            $sommes = (50*3.50);
            $rest = $unites - 100;
            $facture = ($rest * 4.00) + $sommes;
        }
    } else {
        $sommes = (50*3.50) + (100*4.00);
        $rest = $unites - 150;
        $facture = ($rest * 5.20) + $sommes;
    }
} else {
    $sommes = (50*3.50) + (100*4.00) + (100*5.20);
    $rest = $unites - 250;
    $facture = ($rest * 6.50) + $sommes;
}
echo "Ma facture s'élève à ".$facture."€";
echo "<br><br>";

//exo 5
$number = 6;
if (($number % 3) == 0  && ($number % 5) == 0){
    echo $number." est un multiple de 3 et de 5";
} else if (($number % 3) == 0  && ($number % 5) != 0){
    echo $number." est un multiple de 3, mais pas de 5";
} else if (($number % 3) != 0  && ($number % 5) == 0){
    echo $number." n'est pas un multiple de 3, mais de 5";
} else {
    echo $number." n'est pas un multiple de 3 et de 5";
}
echo "<br><br>";

//exo 6
$age = 23;
$sexe = 'Feminin';
if ($sexe != 'Masculin' && ($age > 20 && $age < 41)){
    echo "Bonjour Mademoiselle";
}
echo "<br><br>";



$langage = 'javascript';
switch ($langage){
    case 'python':
        echo "Mon langage de programmation préféré est ".$langage;
        break;
    case 'nodejs':
        echo "Mon langage de programmation préféré est ".$langage;
        break;
    case 'mysql':
        echo "Mon langage de programmation préféré est ".$langage;
        break;
    case 'c++':
        echo "Mon langage de programmation préféré est ".$langage;
        break;
    case 'javascript':
        echo "Mon langage de programmation préféré est ".$langage;
        break;
    default :
    echo "Je n'ai pas de langage de programmation préféré ...";
}
echo "<br><br>";

$mois= date("m"); // recupere le numéro du mois en cours : 02
echo $mois." ";
switch ($mois){
    case 1:
        echo "Janvier";
        break;
    case 2:
        echo "Fevrier";
        break;
    case 3:
        echo "Mars";
        break;
    case 4:
        echo "Avril";
        break;
    case 5:
        echo "Mai";
        break;
    case 6:
        echo "Juin";
        break;
    case 7:
        echo "Juillet";
        break;
    case 8:
        echo "Août";
        break;
    case 9:
        echo "Septembre";
        break;
    case 10:
        echo "Octobre";
        break;
    case 11:
        echo "Novembre";
        break;
    case 12:
        echo "Décembre";
        break;
    default :
    echo "Nous sommes perdu dans l'espace temps";
}
echo "<br><br>";

$carre = 1;
$sommes = null;
while ($carre != 20){
    echo $carre."²<br>";
    $sommes += $carre*$carre;
    echo $sommes."<br>";
    $carre++;
}
echo "La sommes final est ".$sommes;
echo "<br><br>";


////////////////////////////////////////////////

$number = 9;
$multiplication = 1;
while ($number != 90){
    $number = 9 * $multiplication;
    echo "9 x ".$multiplication." = ".$number;
    $multiplication++;
    echo "<br>";
}

echo "<br><br>";


$number = 1;

while ($number != 11){

    $multiplication = 1;
    $var_number = 1;

    while ($var_number != ($number *10)){
        $var_number = $number * $multiplication;
        echo $number." x ".$multiplication." = ".$var_number."<br>";
        $multiplication++;
    }
    $number++;
    echo "<br><br>";
}

////////////////////////////////////////////////

for ($i = 1 ; $i <= 100; $i++){
    if ($i % 3 == 0 && $i % 5 == 0){
        echo $i." FizzBuzz<br>";
    } elseif ($i % 5 == 0 && $i % 3 != 0){
        echo $i." Buzz<br>";
    } elseif ($i % 3 == 0 && $i % 5 != 0){
        echo $i." Fizz<br>";
    }
}
?>
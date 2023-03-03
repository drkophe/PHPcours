<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// $nom = "Bosi";
// $prenom = "Lorenzo";
// $age = 23;

// $note1 = 16;
// $note2 = 14;

// $moyenne = ($note1 + $note2)/2;


?>

<!-- <h1><?php // echo "Bonjour $prenom $nom, vous avez $age ans !";?></h1> -->

<!-- <p>Vos notes : <?php // echo "$note1/20, $note2/20"?></p>
<p>Votre moyenne : <?php // echo "$moyenne/20"?></p> -->

<?php

$eleve = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'notes' => [14 ,16 ,18]
];

$moyenne = array_sum($eleve['notes'])/count($eleve['notes']);

$moyenne_lolo = ($eleve['notes'][0] + $eleve['notes'][1] + $eleve['notes'][2])/count($eleve['notes']);

?>

<h1><?php echo "Elève $eleve[nom] $eleve[prenom]";?></h1>

<h1><?php echo "Elève ". $eleve['nom']." ".$eleve['prenom'];?></h1> <!-- Mieux car on peu utiliser tableau imbriqué [prenom][0] -->

<ul>
    <li>Première note de l'élève : <?php echo $eleve['notes'][0]; ?>/20</li>
    <li>Deuxième note de l'élève : <?php echo $eleve['notes'][1]; ?>/20</li>
    <li>Troisième note de l'élève : <?php echo $eleve['notes'][2]; ?>/20</li>
</ul>

<p>La moyenne de l'élève est : <?php echo $moyenne ?>/20</p>

    <?php 
        $sentence = "";
        $age = 20;

        if ($age >= 18) {
            $sentence = "Vous êtes majeur";
        } elseif ($age < 18 && $age > 13){
            $sentence = "Vous êtes mineur";
        } elseif ($age <= 13){
            $sentence = "Vous êtes un enfant";
        } elseif ($age >= 60){
            $sentence = "Vous êtes un sénior";
        };
    ?>

    <p><?php echo $sentence ?></p>


</body>
</html>



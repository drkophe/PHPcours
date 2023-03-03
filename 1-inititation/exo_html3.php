



<?php

// $eleve = [
//     'nom' => 'Bosi',
//     'prenom' => 'Lorenzo',
//     'age' => 23,
//     'classe' => 'Terminal',
//     'note' => [12, 8, 17, 3, 19, 6]
// ];

$nom = 'Bosi';
$prenom = 'Lorenzo';
$age = 23;
$classe = 'A1';

?>


<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de la page</title> 
    <meta name="author" content="Lorenzo">
    <meta name="description" content="Description de la page"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 

    <h1>L'élève s'appelle <?php echo $nom." ".$prenom; ?></h1>

    <h3>L'élève a <?php echo $age; ?> ans</h3>

    <p>Il est en classe <?php echo $classe; ?></p>


    <?php
    $notes = [12, 8, 17, 3, 19, 6];
    ?>

    <ul>
        <?php 
            foreach ($notes as $key => $index){
                echo "<li>Note ".($key +1)." : ".$index."</li>";
            }
        ?>
    </ul>

    <ul>
        <?php 
        
        echo "Note au dessus de la moyenne : ";
        foreach ($notes as $key => $index){
            if ($index > 10){
                echo "<li>Note ".($key +1)." : ".$index."</li>";
            }
        }
        
        ?>
    </ul>
<!--
Afficher dans une balise ul chaque note de l'éléve (en utilisant
une balise LI)
!indice! Une boucle est nescessaire
-->

<!--
Pour chaque notes de l'éléve, afficher
son numéro (1 pour la note 1, 2 pour la note 2 etc ...)
-->

<!--
Toujours en utilisant une balise ul et li, afficher uniquement
les notes au dessus ou égale à la moyenne !
-->

</body>
</html>




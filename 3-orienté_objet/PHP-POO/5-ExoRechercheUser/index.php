<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Recherche User</title> 
    <meta name="author" content="Lorenzo">
    <meta name="description" content="Description de la page"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 

    <?php 
        include "Utilisateurs.php";
    ?>

    <form>
        <input type="number" name="age_min" placeholder="Age Minimum">
        <input type="number" name="age_max" placeholder="Age Maximum">
        <input type="submit" name="rechercher" value="Rechercher !">
    </form>


    <?php

    ?>

    <?php 
        if ($_GET['rechercher']){

            foreach (Utilisateurs::$tabUser as $i => $user) {

                if ($user['age'] >= $_GET['age_min'] && $user['age'] <= $_GET['age_max']){

                    echo $user['prenom']."<br>";

                }

            }

        }
    ?>
</body>
</html>

<?php

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

</body>
</html>




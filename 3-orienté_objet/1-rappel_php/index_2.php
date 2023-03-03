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
    $eleve0 = [
        'prenom' => 'John',
        'nom' => 'Doe',
        'notes' => [14 ,16 ,18]
    ];

    $eleve1 = [
        'prenom' => 'Martin',
        'nom' => 'Perner',
        'notes' => [19 ,15 ,20]
    ];

    $eleve2 = [
        'prenom' => 'Yann',
        'nom' => 'Bois',
        'notes' => [18 ,20 ,13]
    ];

    $eleves = [$eleve0, $eleve1, $eleve2];


    $classe = [
        'nom' => '6eme D',
        'eleves' => $eleves
    ];

    $nombreEleves = count($classe['eleves']);
?>

    <h1>Classe <?php echo $classe['nom']; ?></h1>
    <p>Nombre d'élèves : <?= $nombreEleves ?></p>

<?php foreach ($eleves as $eleve) :?>

    <h2>Elève <?php echo $eleve['nom']." ".$eleve['prenom'] ?> </h2>

    
    <ul>
        <?php foreach ($eleve['notes'] as $i => $note) :?>
            <li>Note n°<?= $i+1 ?> <?= $note ?>/20</li>
        <?php endforeach ?>
    </ul>

    <p>Sa moyenne est de <?php echo $eleve['moyenne'] = array_sum($eleve['notes']) / count($eleve['notes']); ?></p>


<?php endforeach ?>




</body>
</html>



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
    function titre ($titre) {
        return "<h1>".$titre."</h1>";
    };

    echo titre('No Wayyyy !'); 
    ?>

    <?php
        $note = [12, 19, 7, 13];
        function moyenne ($nombres) {
            $result = array_sum($nombres)/count($nombres);
            return $result;
        };
    ?>

    <p>Votre moyenne : <?php echo moyenne($note); ?></p>

    <?php
        $eleves = [
            [ 'nom' => 'Dupont', 'prenom' => 'Jean' ],
            [ 'nom' => 'Dupont', 'prenom' => 'Jane' ],
            [ 'nom' => 'Doe', 'prenom' => 'John' ],
            [ 'nom' => 'Doe', 'prenom' => 'Jane' ],
        ];

        function afficherEleves ($eleves){
            return $eleves['nom']." ".$eleves['prenom'];
        };
    ?>

    <ul>
        <?php foreach ($eleves as $i => $info) : ?>
            <li>Elève n° <?= $i+1 ?> : <?php echo afficherEleves($info); ?></li>
        <?php endforeach ?>
    </ul>



</body>
</html>



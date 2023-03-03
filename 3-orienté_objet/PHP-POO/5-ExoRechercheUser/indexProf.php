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

    class Utilisateurs
    {
        private $tabUser = [
            0 => [
                'prenom' => 'Lorenzo',
                'age' => 23
            ],
            1 => [
                'prenom' => 'Martin',
                'age' => 25
            ]
        ];

        // Afficher Utilisateur entre age min et age max
        public function afficheUserByAge ($age_min, $age_max){

            foreach($this -> tabUser as $user) {

                // Si l'age est plus grand ou egale a age min
                // Et si l'age est plus petit que l'age max
                if($user['age'] >= $age_min && $user['age'] <= $age_max){
                    echo $user['prenom']." age : ".$user['age']." ans<br>";
                }
            }
        }
    }

    $utilisateur = new Utilisateurs();

    // $utilisateur -> afficheUserByAge(0,30)
    ?>

    <form>
        <input type="number" name="age_min" placeholder="Age Minimum">
        <input type="number" name="age_max" placeholder="Age Maximum">
        <input type="submit" name="rechercher" value="Rechercher !">
    </form>

    <?php 
        if (isset ($_GET['age_min']) && isset ($_GET['age_max'])) {

            $utilisateur -> afficheUserByAge($_GET('age_min'),$_GET('age_max'));

        }
    ?>

</body>
</html>
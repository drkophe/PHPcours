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
        include "classes/Utilisateurs.php";
    ?>

    <form method="POST">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="mdp" placeholder="Mot de Passe">
        <input type="submit" name="connexion" value="Connexion !">
    </form>

    <?php 
        if (isset ($_POST['connexion'])){

            $login = $_POST['login'];
            $mdp = $_POST['mdp'];

            $user = new Utilisateurs();

            $user -> connexion($_POST['login'], $_POST['mdp']);

        }
    ?>

    <?php 
    if (isset($_COOKIE['login'])) {

        echo "Bonjour ".$_COOKIE['login']." vous êtes bien connecté !";

    }
    ?>
</body>
</html>

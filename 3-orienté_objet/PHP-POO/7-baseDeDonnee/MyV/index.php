<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lien avec la base de donnee phpMyADmin</title> 
    <meta name="author" content="Lorenzo">
    <meta name="description" content="Description de la page"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 

    <header>
        <h1>phpMyAdmin POO</h1>
    </header>

    <main>
        <?php 
        //////// info de connexion a la base de donnée ////////

        // L'adresse de la base de donnée (ou l'hote)
        $adresseBdd = "localhost:3306"; // quand c'est en local windows port 3306 / sur mac : 8889

        // L'utilisateur de la base de donnée
        $utilisateurBdd = "root"; // par defaut 'root'

        // Le mot de passe de la base de donnée
        $mdpUtilisateurBdd = ""; // sous windows pas de mot de passe, sous mac c'est 'root' aussi

        // le nom de la base de donnée
        $nomBdd = "blog"; 



        ///////////// connexion a la base de donnée //////////
        // faire du copier coller
        try {

            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd,
            $utilisateurBdd, $mdpUtilisateurBdd);

            echo "Connexion réussie";
        }
        catch(PDOException $erreur) {
            
            echo "Erreur :" . $erreur->getMessage();
        }
        ?>

        <?php 
        // Récupération des utilisateurs
        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs");
        ?>

        <ul>
            <?php foreach ($utilisateurs as $utilisateur) : ?>
                <li><?= $utilisateur['prenom'] ?></li>
            <?php endforeach ?>
        </ul>

        <h2>Inscription</h2>

        <form method="POST">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <input type="text" name="prenom" placeholder="Prenom">
            <input type="text" name="photo_profil" placeholder="URL photo de profil">
            <input type="number" name="age" placeholder="Age">

            <input type="submit" name="inscription" value="S'inscrire">
        </form>

        <?php 
        if (isset($_POST['inscription'])){

            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $prenom = $_POST['prenom'];
            $photo_profil = $_POST['photo_profil'];
            $age = $_POST['age'];

            $connexion->query("INSERT INTO utilisateurs 
            (login,mdp,prenom,photo_profil,age) 
            VALUES
            ('$login','$mdp','$prenom','$photo_profil',$age)
            ");

            // header('Location : PHP-POO/7-baseDeDonnee/MyV/index.php'); // erreur ici ??
        }
        ?>

    </main>
   
</body>
</html>

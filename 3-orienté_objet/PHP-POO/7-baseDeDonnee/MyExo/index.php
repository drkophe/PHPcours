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

    <?php include 'classes/Utilisateurs.php'; ?>

    <header>
        <h1>Blog</h1>
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
            $nomBdd = "blog_exo"; 



            ///////////// connexion a la base de donnée //////////
            // faire du copier coller
            try {

                $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd,
                $utilisateurBdd, $mdpUtilisateurBdd);

                // echo "Connexion réussie";
            }
            catch(PDOException $erreur) {
                
                echo "Erreur :" . $erreur->getMessage();
            }
        ?>

        <?php 
        
            function connexion($login)
            {

                setcookie('login', $login, time() + 3600);
        
                // Redirection vers la page index
                header('Location: /PHPcours/3-orienté_objet/PHP-POO/7-baseDeDonnee/MyExo/index.php');

            }

            function deconnexion()
            {
                // On vide le cookie login
                setcookie('login', '');
                // On supprime la variable PHP du cookie du login
                unset($_COOKIE['login']);
                // On redirige vers la page index
                header('Location: /PHPcours/3-orienté_objet/PHP-POO/7-baseDeDonnee/MyExo/index.php');
            }
        
        ?>



        <?php if (isset ($_COOKIE['login'])) { ?>

            <form method="POST">
                <input type="submit" name="deconnexion" value="Deconnexion">
            </form>
            <?php 
                if (isset($_POST['deconnexion'])){
                    deconnexion();
                }
            ?>

            <?php

                $baseDeDonnee = $connexion->query("SELECT * FROM utilisateurs");

                foreach($baseDeDonnee as $utilisateur) : ?>
                    
                    <?php if($utilisateur['login'] == $_COOKIE['login']){?>

                        <h2>Bonjour, <?= $utilisateur['prenom']. " " .$utilisateur['nom']; ?></h2>

                        <img src="<?= $utilisateur['photo_profil'] ?>" alt="photo de profil" width="200">


                        <h3>Publier un article</h3>
                        <form id="publication" method="POST">
                            <input type="text" name="titre" placeholder="Titre">
                            <textarea name="contenu" id="contenu" cols="30" rows="10" placeholder="Ecrit ce que tu veux !"></textarea>

                            <input type="submit" name="publier" value="Publier">
                        </form>

                        <?php 
                        
                        if (isset($_POST['publier'])){

                            $auteur = $utilisateur['prenom'];
                            $titre = $_POST['titre'];
                            $contenu = $connexion->quote($_POST['contenu']);
                            $date = date('Y-m-d');
                
                
                            $connexion->query("INSERT INTO articles 
                            (titre,contenu,auteur,date) 
                            VALUES
                            ('$titre',$contenu,'$auteur','$date')
                            ");
    
                        }         

                        ?>

                        <h3>Mes Articles Publiés</h3>
                        <?php $articles = $connexion->query("SELECT * FROM articles");

                        foreach($articles as $article) : 
                            if($article['auteur'] == $utilisateur['prenom']){
                        ?>
                            

                            <div class="articles">
                                <h3><?= $article['titre'] ?></h3>
                                <p><?= $article['contenu'] ?></p>
                                <p><?= $article['auteur']. " ".$article['date'] ?></p>
                            </div>

                        <?php } endforeach ?>
                        
                    <?php } ?>
                
                <?php endforeach?>

        <?php } else { ?>

            <div id="inscription">

                <h2>Inscription</h2>

                <form method="POST">
                    <div>
                        <input type="text" name="login" placeholder="Login">
                        <input type="password" name="mdp" placeholder="Mot de passe">
                        <input type="text" name="nom" placeholder="Nom">
                        <input type="text" name="prenom" placeholder="Prenom">
                        <input type="text" name="photo_profil" placeholder="URL photo de profil">
                        <input type="number" name="age" placeholder="Age">
                    </div>
                    <input type="submit" name="inscription" value="S'inscrire">
                </form>

                <?php 
                    if (isset($_POST['inscription'])){

                        $login = $_POST['login'];
                        $mdp = $_POST['mdp'];
                        $prenom = $_POST['prenom'];
                        $nom = $_POST['nom'];
                        $age = $_POST['age'];
                        $photo_profil = $_POST['photo_profil'];


                        $connexion->query("INSERT INTO utilisateurs 
                        (login,mdp,prenom,nom,age,photo_profil) 
                        VALUES
                        ('$login','$mdp','$prenom','$nom',$age,'$photo_profil')
                        ");

                        connexion($_POST['login']);
                        

                        // header('Location : PHP-POO/7-baseDeDonnee/MyV/index.php'); // erreur ici ??
                    }
                ?>

            </div>

            <div id="connexion">

                <h2>Connexion</h2>

                <form method="POST">
                    <div>
                        <input type="text" name="login" placeholder="Login">
                        <input type="password" name="mdp" placeholder="Mot de passe">                        
                    </div>

                    <input type="submit" name="connexion" value="Se connecter">
                </form>

                <?php 
                    if (isset($_POST['connexion'])){

                        $login = $_POST['login'];
                        $mdp = $_POST['mdp'];

                        $baseDeDonnee = $connexion->query("SELECT * FROM utilisateurs");

                        foreach($baseDeDonnee as $utilisateur){
                            if($utilisateur['login'] == $_POST['login']){
                                connexion($_POST['login']);
                            }
                        }
                    }
                ?>

            </div>

            <h2>Fil d'actualité</h2>

            <div id="fil_actu">

                <?php $articles = $connexion->query("SELECT * FROM articles ORDER BY id DESC");

                foreach($articles as $article) : 
                ?>

                    <div class="articles">
                        <h3><?= $article['titre'] ?></h3>
                        <p><?= $article['contenu'] ?></p>
                        <p><?= $article['auteur']. " ".$article['date'] ?></p>
                    </div>

                <?php endforeach ?>

            </div>

        <?php } ?>

    </main>
   
</body>
</html>

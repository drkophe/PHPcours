<?php
class bdd
{

    function connexion()
    {
        // Infos de connexion à la base de données
        $adresseBdd = "localhost:8889"; // Win: 3306, Mac: 8889
        $utilisateurBdd = "root";
        $mdpUtilisateurBdd = "root"; // Win: "", Mac: "root"
        $nomBdd = "blog";

        // Connexion à la base de données
        try {

            $connexion = new PDO(
                "mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd,
                $utilisateurBdd,
                $mdpUtilisateurBdd
            );

            echo "<div class='alert alert-success'>Connexion réussie</div>";
        } catch (PDOException $erreur) {

            echo "Erreur:" . $erreur->getMessage();
        }

        return $connexion;
    }
}

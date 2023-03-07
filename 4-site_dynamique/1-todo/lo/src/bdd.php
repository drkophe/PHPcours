<?php

declare(strict_types=1);

class bdd
{
    public function connexionBdd (){
        //////// info de connexion a la base de donnée ////////
            // L'adresse de la base de donnée (ou l'hote)
            $adresseBdd = "localhost:3306";
            // L'utilisateur de la base de donnée
            $utilisateurBdd = "root";
            // Le mot de passe de la base de donnée
            $mdpUtilisateurBdd = "";
            // le nom de la base de donnée
            $nomBdd = "todo"; 

            ///////////// connexion a la base de donnée //////////
            try {

                $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd,
                $utilisateurBdd, $mdpUtilisateurBdd);

                // echo "Connexion réussie";
            }
            catch(PDOException $erreur) {
                
                echo "Erreur :" . $erreur->getMessage();
            }

            return $connexion;
    }
}

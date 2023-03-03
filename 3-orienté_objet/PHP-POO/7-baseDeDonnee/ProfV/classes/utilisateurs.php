<?php
// Classe Utilisateurs
class Utilisateurs
{
    // Liste d'utilisateurs
    private $listeUtilisateurs = [
        0 => [
            "prenom" => "Lawrence",
            "age" => 29,
            "login" => "lawrence",
            "mdp" => "1234",
            "photo_profil" => "lawrence.jpeg",
            "description" => "Bla bla bla ..."
        ],
        1 => [
            "prenom" => "Fred",
            "age" => 34,
            "login" => "fred",
            "mdp" => "123456",
            "photo_profil" => "fred.png",
            "description" => "Bla bla bla ..."
        ]
    ];


    /**
     * Connexion utilisateur
     */
    public function connexion($login, $mdp)
    {
        // On parcours la liste des utilisateurs
        foreach ($this->listeUtilisateurs as $utilisateur) {

            // Si le login et le mot de passe sont correctes
            if ($utilisateur['login'] == $login && $utilisateur['mdp'] == $mdp) {

                // On créé un cookie qui stocke le login pendant 1h
                setcookie('login', $utilisateur['login'], time() + 3600);

                // Redirection vers la page index
                header('Location: /php-poo/index.php');
            }
        }
    }

    /**
     * Déconnexion utilisateur
     */
    public function deconnexion()
    {
        // On vide le cookie login
        setcookie('login', '');
        // On supprime la variable PHP du cookie du login
        unset($_COOKIE['login']);

        // On redirige vers la page index
        header('Location: /php-poo/index.php');
    }

    /**
     * Affichage d'un utilisateur
     */
    public function afficherUtilisateur()
    {
        $utilisateurConnecte = [];

        // On parcours la liste des utilisateurs
        foreach ($this->listeUtilisateurs as $utilisateur) {

            // Si le login de l'utilisateur est le même que le cookie du login
            if ($utilisateur['login'] == $_COOKIE['login']) {

                // On récupère l'utilisateur
                $utilisateurConnecte = $utilisateur;
            }
        }

        return $utilisateurConnecte;
    }
}

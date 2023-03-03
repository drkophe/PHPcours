<?php

declare(strict_types=1);

class Utilisateurs
{
    private $utilisateurs = [
        0 => [
            'prenom' => 'Lorenzo',
            'age' => 23,
            'login' => 'lorenzo',
            'mdp' => '1234'
        ],
        1 => [
            'prenom' => 'Martin',
            'age' => 25,
            'login' => 'martin',
            'mdp' => '1234'
        ]
    ];

    /**
     * Connexion utilisateur
     */
    public function connexion($login, $mdp, $requeteSQL)
    {
        // On parcours la liste des utilisateurs
        foreach ($requeteSQL as $utilisateur) {

            // Si le login et le mot de passe sont correctes
            if ($utilisateur['login'] == $login && $utilisateur['mdp'] == $mdp) {

                // On créé un cookie qui stocke le login pendant 1h
                setcookie('login', $utilisateur['login'], time() + 3600);

                // Redirection vers la page index
                header('Location: /classes/index.php');
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
        header('Location: /MyExo/index.php');
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

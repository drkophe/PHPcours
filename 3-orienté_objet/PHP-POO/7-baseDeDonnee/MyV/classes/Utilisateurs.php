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

    public function connexion ($login, $mdp){

        foreach($this -> utilisateurs as $user){

            if($user['login'] == $login && $user['mdp'] == $mdp){

                echo "Bonjour vous êtes bien connecté ".$user['prenom']." :)";

                // on crée un cookie qui stocke le login pendant 1h (prendre une info unique comme le login ou l'email par exemple)
                setcookie('login', $user['login'], time() + 3600);

            }

        }
        
    }
}

<?php

declare(strict_types=1);

include_once('bdd.php');

class user
{
    public function connexion()
    {
        $bdd = new bdd();
        $connexion = $bdd->connexionBdd();

        $email = $_POST['email'];
        $password = $_POST['password'];

        // On récupère l'utilisateur qui a le même login et le même mot de passe
        $users = $connexion->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");

        // Si l'utilisateur a été récupéré
        foreach ($users as $user) {

            // On créé le cookie du login pendant 1h
            setcookie('email', $email, time() + 3600);

            // On redirige vers la page d'accueil
            header('Location: /PHPcours/4-site_dynamique/1-todo/index.php');
        }
    }
}

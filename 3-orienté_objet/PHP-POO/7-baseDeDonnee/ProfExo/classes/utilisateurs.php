<?php
include_once('bdd.php');

// Classe Utilisateurs
class Utilisateurs
{

    public function connexion()
    {
        $bdd = new bdd();
        $connexion = $bdd->connexion();

        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        // On récupère l'utilisateur qui a le même login et le même mot de passe
        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs WHERE login = '$login' AND mdp = '$mdp'");

        // Si l'utilisateur a été récupéré
        foreach ($utilisateurs as $utilisateur) {

            // On créé le cookie du login pendant 1h
            setcookie('login', $login, time() + 3600);

            // On redirige vers la page d'accueil
            header('Location: /php-poo/index.php');
        }
    }
}

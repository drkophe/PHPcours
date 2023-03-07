<?php
include_once('bdd.php');

class Articles
{

    public function publier_article()
    {
        $bdd = new bdd();
        $connexion = $bdd->connexion();

        $auteur = $_POST['auteur'];
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $image = $_POST['image'];
        $date_publication = $_POST['date_publication'];

        $connexion->query("INSERT INTO articles
            (auteur, titre, contenu, image, date_publication)
        VALUES
            ('$auteur', '$titre', '$contenu', '$image', '$date_publication')");
    }

    public function recuperationArticles()
    {
        $bdd = new bdd();
        $connexion = $bdd->connexion();

        $articles = $connexion->query("SELECT * FROM articles");

        return $articles;
    }
}

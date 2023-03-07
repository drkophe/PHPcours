<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>

    <header class="row m-0 p-3 align-items-center justify-content-between">
        <h1>Blog</h1>

        <div>
            Bonjour <?= $_COOKIE['login']; ?>
        </div>
    </header>

    <main class="container p-3">

        <?php
        include_once('classes/articles.php');
        include_once('classes/utilisateurs.php');

        $Articles = new Articles();
        $Utilisateurs = new Utilisateurs();

        // Si le formulaire de publication d'article est soumi
        if (isset($_POST['publier-article'])) {

            $Articles->publier_article();
        }

        // Si le formulaire de connexion est soumi
        if (isset($_POST['connexion'])) {

            $Utilisateurs->connexion();
        }
        ?>

        <?php
        // Si on est connecté (si le cookie login existe)
        if (isset($_COOKIE['login'])) {
        ?>

            <section id="publier-article" class="mt-3 mb-3">
                <h2 class="text-center">Publier un article</h2>
                <form method="POST">
                    <input type="text" name="auteur" placeholder="Auteur" class="form-control">
                    <br>
                    <input type="text" name="titre" placeholder="Titre" class="form-control">
                    <br>
                    <textarea name="contenu" class="form-control">Contenu ...</textarea>
                    <br>
                    <input type="text" name="image" placeholder="Image" class="form-control">
                    <br>
                    <input type="hidden" name="date_publication" value="<?= date("d/m/Y"); ?>">
                    <br>
                    <input type="submit" name="publier-article" value="Publier" class="btn btn-primary">
                </form>
            </section>

        <?php
        } else {
        ?>

            <section id="inscription" class="mt-3 mb-3">
                <h2 class="text-center">Inscription</h2>
                <form method="POST">
                    <input type="text" name="login" placeholder="Login" class="form-control">
                    <br>
                    <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
                    <br>
                    <input type="text" name="prenom" placeholder="Prénom" class="form-control">
                    <br>
                    <input type="text" name="photo_profil" placeholder="Photo de profil" class="form-control">
                    <br>
                    <input type="number" name="age" placeholder="Age" class="form-control">
                    <br>
                    <input type="submit" name="inscription" value="S'inscrire" class="btn btn-primary">
                </form>
            </section>

            <section id="connexion" class="mt-3 mb-3">
                <h2 class="text-center">Connexion</h2>
                <form method="POST">
                    <input type="text" name="login" placeholder="Login" class="form-control">
                    <br>
                    <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
                    <br>
                    <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
                </form>
            </section>

        <?php
        }
        ?>

        <section id="articles">
            <h2>Articles</h2>

            <?php
            $articles = $Articles->recuperationArticles();
            ?>

            <ul class="row">

                <?php
                foreach ($articles as $article) {
                ?>

                    <li class="col-4 mb-3">
                        <div class="card">
                            <div class="frame">
                                <img src="<?= $article['image']; ?>">
                            </div>
                            <div class="p-3">
                                <h3><?= $article['titre']; ?></h3>
                                <p><?= $article['date_publication']; ?></p>
                            </div>
                        </div>
                    </li>

                <?php
                }
                ?>

            </ul>
        </section>
    </main>

    <footer>
        <h1>Blog</h1>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>PHP - POO</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>

    <header class="flex">
        <div>
            <h1>Authentification</h1>
        </div>
        <div>
            <div class="flex">
                <?php
                if (isset($_COOKIE['login'])) {
                ?>
                    <a>Bonjour <?= $_COOKIE['login']; ?></a>

                    <form method="POST">
                        <input type="submit" name="deconnexion" value="Déconnexion">
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </header>

    <main>
        <?php
        include_once('classes/utilisateurs.php');

        $Utilisateurs = new Utilisateurs();
        ?>

        <?php
        if (isset($_POST['deconnexion'])) {

            $Utilisateurs->deconnexion();
        }

        if (isset($_POST['connexion'])) {

            $login = $_POST['login'];
            $mdp = $_POST['mdp'];

            $Utilisateurs->connexion($login, $mdp);
        }
        ?>

        <?php
        // Si on est connecté (si le cookie du login existe)
        if (isset($_COOKIE['login'])) {

            $utilisateur = $Utilisateurs->afficherUtilisateur();
        ?>

            <section id="presentation">
                <div class="flex container">
                    <div>
                        <div class="cadre">
                            <img src="images/<?= $utilisateur['photo_profil']; ?>">
                        </div>
                    </div>
                    <div>
                        <h2><?= $utilisateur['prenom']; ?></h2>
                        <h3><?= $utilisateur['age']; ?> ans</h3>
                    </div>
                </div>
            </section>

            <section id="description">
                <div class="container">
                    <p><?= $utilisateur['description']; ?></p>
                </div>
            </section>

        <?php
        } else {
        ?>

            <section id="connexion">
                <h2 class="text-center">Connexion</h2>

                <div class="flex container">
                    <!-- Formulaire de connexion -->
                    <form method="POST">
                        <div class="flex">
                            <input type="text" name="login" placeholder="Login">
                        </div>
                        <br>
                        <div class="flex">
                            <input type="password" name="mdp" placeholder="Mot de passe">
                        </div>
                        <br>

                        <input type="submit" name="connexion" value="Connexion">
                    </form>
                </div>
                <div class="text-center">
                    <p>Pas encore inscrit ? <a href="#">inscrivez-vous</a></p>
                </div>
            </section>

        <?php
        }
        ?>
    </main>

    <footer>
        <h1>Authentification</h1>

        <br>
        <br>
        <br>
        <br>
        <br>
    </footer>
</body>

</html>
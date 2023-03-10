<nav>

    <i class="bi bi-list" id="menu-boutton"></i>

    <ul style="left : -100%">
        <li><a href="/PHPcours/4-site_dynamique/1-todo/lo/">Accueil</a></li>
        <li>
            <a href="<?= isset($_SESSION) && isset($_SESSION['id']) ? "/PHPcours/4-site_dynamique/1-todo/lo/profil.php": "/PHPcours/4-site_dynamique/1-todo/lo/login.php" ?>">
            <?= isset($_SESSION) && isset($_SESSION['id']) ? "Profil": "Se Connecter" ?>
            </a>
        </li>

        <?= 
            // si l'utilisateur est connecter 
            isset($_SESSION) && isset($_SESSION['id']) ? // alors :
            " <li><a href='/PHPcours/4-site_dynamique/1-todo/lo/routes/logout.php'> Se déconnecter </a></li>" : " "
        
        ?>
    </ul>

</nav>
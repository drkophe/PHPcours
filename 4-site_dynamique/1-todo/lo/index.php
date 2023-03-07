<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List / PHP</title> 
    <meta name="author" content="Lorenzo">
    <meta name="description" content="Description de la page"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 

    <?php include 'src/user.php'; ?>

    <header>
        <h1>TODO LIST IN PHP</h1>
    </header>

    <main>

        <div id="inscription">
            <form method="POST">
                <div id="inscription_information">
                    <input type="email" name="email" placeholder="Ex : luffy@roidespirates.fr">
                    <input type="password" name="password" placeholder="Ex : LeRoiDESpirates77">
                    <input type="text" name="avatarURL" placeholder="Ex : https://.....">
                </div>
                <!-- <input type="submit" name="insciption" value="S'incrire"> -->
                <button>S'inscrire</button>
            </form>
        </div>

        <div id="connexion">
            <form method="POST">
                <div id="connexion_information">
                    <input type="email" name="email" placeholder="Ex : zoro@bestsaber.com">
                    <input type="password" name="password" placeholder="Ex : OmAEwa09">
                </div>
                <!-- <input type="submit" name="connexion" value="Se connecter"> -->
                <button>Se connecter</button>
            </form>
        </div>

    </main>

</body>
</html>

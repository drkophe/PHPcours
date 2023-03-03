<?php include('recettes.php') // inclusion du fichier php 'recette'?>

<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette de cuisine de Lolo</title> 
    <meta name="author" content="Lorenzo">
    <meta name="description" content="Description de la page"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <?php include('index_php/header.php') // inclusion du header?>

    <main>
        <form action="" id="addRecipe">

            <div>
                <div>
                    <h3>Intitulé : </h3>
                    <input type="text" id="mail" size="50" placeholder="ex : Poulet Braisé">
                </div>

                <div>
                    <h3>Description :</h3>
                    <textarea name="message" id="text" cols="50" rows="2" placeholder="ex : Un délicieux poulet braisé ! :)"></textarea>
                </div>

                <div>
                    <h3>Difficulté : </h3>
                    <input type="number" id="mail" size="50" min='1' max='5' placeholder="ex : 4">
                </div>

                <div>
                    <h3>Prix : </h3>
                    <input type="number" id="mail" size="50" min='1' max='5' placeholder="ex : 2">
                </div>
            </div>

            <div>
            <div>
                <h3>Ajouter une image </h3>
                <input type="mail" id="mail" size="50" placeholder="Copier l'url, ex : https://external-content.duc... ">
            </div>

            <button>Nouvelle recette</button>
            </div>
        </form>
    </main>

    <?php include('index_php/footer.php') // inclusion du header?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>




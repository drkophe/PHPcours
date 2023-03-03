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
        <?php foreach ($recettes as $recette) : ?>

            <div class='test'>
            <span class='line'></span>

            <div class='up'>
                <div>
                    <h3><?= $recette['intitulé'] ?></h3>
                    <p><?= $recette['description'] ?></p>
                </div>    

                <div class ='container'>
                    <div class='img' style = 'background-image : url(<?= $recette['image'] ?>)'></div>
                </div>

            </div>

            <div class='down'>
                <div>
                    <span>
                        <h6>Difficulté</h6>
                        <p><?= $recette['difficulte'] ?></p>
                    </span>

                    <span>
                        <h6>Prix</h6>
                        <p><?= $recette['prix'] ?></p>
                    </span>

                    <span>
                        <h6>Auteur</h6>
                        <p><?= $recette['auteur']['nom'] ?> <?= $recette['auteur']['prenom'] ?></p>
                    </span>
                </div>


                <div>
                    <ion-icon name='heart-outline'></ion-icon>
                    <p><?= $recette['likes'] ?></p>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </main>

    <!-- foreach ($recettes as $tab_id => $info){ -->
            <!-- echo "<div class='test'>
            <span class='line'></span>

            <div class='up'>
                <div>
                    <h3>".($info['intitulé'])."</h3>
                    <p>".($info['description'])."</p>
                </div>    

                <div class ='container'>
                    <div class='img' style = 'background-image : url(".($info['image']).")'></div>
                </div>

            </div>

            <div class='down'>
                <div>
                    <span>
                        <h6>Difficulté</h6>
                        <p>".($info['difficulte'])."</p>
                    </span>

                    <span>
                        <h6>Prix</h6>
                        <p>".($info['prix'])."</p>
                    </span>

                    <span>
                        <h6>Auteur</h6>
                        <p>".$recettes[$tab_id]['auteur']['nom']." ".$recettes[$tab_id]['auteur']['prenom']."</p>
                    </span>
                </div>


                <div>
                    <ion-icon name='heart-outline'></ion-icon>
                    <p>".($info['likes'])."</p>
                </div>
            </div>
        </div>";
                // echo ($info['intitulé'])."<br>";
        } -->

        <?php include('index_php/footer.php') // inclusion du header?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>




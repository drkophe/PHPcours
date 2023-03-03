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
        <?php 
        // foreach ($recettes as $tab_id){
        //     foreach ($tab_id as $id => $info){
        //         echo ($info['intitulé'])."<br>";
        //     }
        // }
        usort($recettes, function($a, $b) {
            return $b['likes'] - $a['likes'];
        });

        foreach ($recettes as $tab_id => $info){

            echo "<div class='test'>
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
        }
        ?>
    </main>


    <!-- 'id' => 1,
    'intitulé' => 'Poulet Basquaise',
    'description' => 'Une délicieuse recette de poulet au poivrons :)',
    'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fauvraidelice.fr%2Fwp-content%2Fuploads%2F2020%2F06%2FIMG-AuVraiDelice-6.jpg&f=1&nofb=1&ipt=5192941f5ed4215a84f1436d1c078cb15fe138fbd50d865f5681fdd851283f76&ipo=images',
    'likes' => 8,
    'difficulte' => 4,
    'prix' => '€',
    'active' => true,
    'auteur' => [
        'id' => 1,
        'nom' => 'Doe',
        'prenom' => 'Jane',
    ] -->

    <?php include('index_php/footer.php') // inclusion du header?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
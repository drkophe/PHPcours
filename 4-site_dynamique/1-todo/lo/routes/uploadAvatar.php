

<?php
session_start();
include_once "../controllers/UserController.php";


//créer l'utilisateur à partir de l'id
$user= UserController::createUserFromId($_SESSION['id']);


//mettre a jour l'avatar de user dans la base de données
$_SESSION['avatarURL'] = $user->saveImage($_POST['avatarURL']);

header('Location: /PHPcours/4-site_dynamique/1-todo/lo/profil.php');
die();

?>
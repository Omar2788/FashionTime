<?php
    require_once "pdo.php";
    require_once "header.php";
    require_once "session.php";
    Verifier_session();

    require_once ("pdo.php");
/* récupération des données du formulaire */
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$desp = $_POST['desp'];
$image = $_POST['image'];
$username = $_SESSION['nom'];



$sql= "INSERT INTO commande (nom,prix,desp,image,nomclient) VALUES
('$nom','$prix','$desp','$image','$username')";
$pdo->exec($sql);
header('location:liste_produit_acheteur.php');

?>
 
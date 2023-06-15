<?php
    require_once "pdo.php";
    require_once "header.php";
    require_once "session.php";
    Verifier_session();

    require_once ("pdo.php");
/* récupération des données du formulaire */
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$desc = $_POST['desc'];
$image=$_FILES['image']['name'];
$fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$image );



$sql= "INSERT INTO produit (nom,prix,desp,image) VALUES
('$nom','$prix','$desc','$image')";
$pdo->exec($sql);
header('location:liste_produit_vendeur.php');

?>
 
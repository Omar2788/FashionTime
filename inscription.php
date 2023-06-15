<?php
    require_once "pdo.php";
 
/* récupération des données du formulaire */
$nom = $_POST['nom'];
$motdepasse = $_POST['motdepasse'];
$role = $_POST['role'];


$sql= "INSERT INTO visiteur (nom,motdepasse,role) VALUES
('$nom','$motdepasse','$role')";
$pdo->exec($sql);
if($role=="Vendeur")
{
    header('location:liste_produit_vendeur.php');
}if($role=="acheteur") {
    header('location:liste_produit_acheteur.php');
}
if($role=="" || $nom=="" || $motdepasse=="") {
    header('location:inscriptionForm.php');
}
?>

 
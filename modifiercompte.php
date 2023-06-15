<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$nom = $_POST['nom'];
$motdepasse = $_POST['motdepasse'];

$sql = "UPDATE visiteur SET nom='$nom', motdepasse='$motdepasse' WHERE nom='" . $_SESSION["nom"] . "'";
$pdo->exec($sql);
header('location:liste_produit_acheteur.php');

?>



 
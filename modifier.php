<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id = $_POST['id'];
$nom = $_POST['nom'];
$prix = $_POST['prix'];
$desp = $_POST['desp'];
$image=$_FILES['image']['name'];
if ($image=="")
{
$sql = "UPDATE produit SET nom='$nom', prix='$prix', desp='$desp' WHERE id=$id";
$pdo->exec($sql);
header('location:liste_produit_vendeur.php');
} else
{
   $fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'images/'.$image );
$sql = "UPDATE produit SET nom='$nom', prix='$prix', desp='$desp', image='$image' WHERE id=$id";
$pdo->exec($sql);
header('location:liste_produit_vendeur.php');
}



?>



 

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<meta charset="utf-8">
<link rel="stylesheet" href="liste_vendeur.css">
    </head>
    <body>
 
        <?php
 
 require_once "pdo.php";
 require_once "header.php";
 require_once "session.php";
 Verifier_session();
$sql="SELECT * from produit ";
$res=$pdo->query($sql);              
?>
<h1 class='title'>Liste des Articles :</h1>
<button class="Ajoutarticle"><a href="ajoutproduit.php"class="ajouterarticle"><i class="bi bi-plus-circle"></i> Ajouter Article</a></button>
<div class="product-list">
    <?php foreach ($res as $row): ?>
        <div class="product-item">
            <div style="display: flex;justify-content: space-between;">
            <div class="product-name"><?= $row['nom'] ?></div>
            <div class="product-actions">
                <a href="delete.php?id_etd=<?php echo $row['id']; ?>"><i class="bi bi-trash"style="color: red;"></i></a>
                <a href="modifierProduit.php?id_etd=<?php echo $row['id']; ?>"><i class="bi bi-pencil-fill"style="color: #00ab07;"></i></a>
            </div>
            </div>
            <div class="product-description"><?= $row['desp'] ?></div>
            <div class="product-price"><?= $row['prix'] ?> DT</div>
            <div class="product-image">
                <img src="images/<?= $row['image'] ?>" width="50" height="50">
            </div>
            
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
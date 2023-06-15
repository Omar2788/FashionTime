
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
 require_once "headerAchatdeAcheteur.php";
 require_once "session.php";
 Verifier_session();
$sql="SELECT * from commande where nomclient='".$_SESSION["nom"]."'";
$res=$pdo->query($sql);              
?>
<a href="liste_produit_acheteur.php"class="retour"><i class="bi bi-arrow-left-square-fill"></i> Retour</a>
<h1 class='title'style="color: #dfd9b7;font-family: cursive;">Tout les articles acheter depuis fashion time :</h1>
<div class="product-list">
    <?php foreach ($res as $row): ?>
        <div class="product-item">
            <div style="justify-content: space-between;">
            <div class="product-name"><?= $row['nom'] ?></div>
            
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
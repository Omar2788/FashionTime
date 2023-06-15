
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<meta charset="utf-8">
<link rel="stylesheet" href="ajoutproduit.css">

</head>
<body>
 
<?php
 
 require_once "pdo.php";
 require_once "header.php";
 require_once "session.php";
 Verifier_session();
?>
<div class="formulaire">
 <form action="ajoutprod.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom de l'Article :</label>
      <input type="text" class="form-control" name="nom" id="nom" placeholder="Pull"required>
    </div>
    <div class="form-group col-md-6">
      <label for="prix">Prix de l'Article :</label>
      <input type="text" class="form-control" name="prix" id="prix" placeholder="80 DT"required>
    </div>
  </div>
  <div class="form-group">
    <label for="desc">Description de l'Article :</label>
    <textarea type="text" class="form-control" name="desc" id="desc" placeholder="Pull de couleur rouge de taille small"required></textarea>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Image de l'article</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="image"id="image"required>
    <label class="custom-file-label" for="image">Choose file</label>
  </div>
</div>
  <button type="submit" class="btnAjouter">Ajouter <i class="bi bi-plus-circle"></i></button>
</form>
<a href="liste_produit_vendeur.php"><button type="button" class="btnRetour"><i class="bi bi-arrow-left"></i> Retour</button></a>
</div>            
</body>
</html>
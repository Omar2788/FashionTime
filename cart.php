<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="cart.css">
</head>
<body>

<?php
 require_once "pdo.php";
 require_once "headerAcheteur.php";
 require_once "session.php";
 Verifier_session();

/* récupération des données du formulaire */
$id_etd=$_GET['id_etd'];

try{
    $req="SELECT * FROM produit where id='$id_etd'";
    $res=$pdo->query($req);
    $data=$res->fetchAll(PDO::FETCH_ASSOC);
    if (count($data)===1){
        $nom=$data[0]["nom"];
        $desp=$data[0]["desp"];
        $prix=$data[0]["prix"];
        $photo=$data[0]["image"];
    }
} catch(PDOException $e){
    echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
}

?>


<a href="liste_produit_acheteur.php"class="retour"><i class="bi bi-arrow-left-square-fill"></i> Retour</a>
<h1 class="title">Acheter un Article :</h1>
<label name="id"class="article titredelarticle">Article : <?php echo($nom) ?> </label> 
<div class="modif">

<form action="acheter.php" method="post" enctype="multipart/form-data"class="form">
<div style="float: left;">             
<label for="nom"name="nom" id="nom"style="color: #adadad;" >Nom :</label> 
<label for="nom"name="nom" id="nom"><?php echo($nom)?></label> 
<input type="hidden" name="nom" id="nom" value="<?php echo($nom)?>">                


<label for="desp"style="color: #adadad;">Description de l'article :</label> 
<label for="desp"name="desp" id="desp"><?php echo($desp)?></label> 
<textarea type="hidden" name="desp" id="desp" style="display:none;" value="<?php echo($desp)?>"><?php echo($desp)?></textarea>
<label for="prix"style="color: #adadad;">Prix :</label> 
<label for="prix"name="prix" id="prix"><?php echo($prix)?>DT</label>
<input type="hidden" name="prix" id="prix" value="<?php echo($prix)?>">                

<button type="submit" name="Envoyer" value=""class="btnEnvoyer">Passer commande</button>
</div>
<div style="float: right;">
<input type="hidden" name="image" id="image" value="<?php echo($photo)?>">                
<img src= "images/<?=$photo?>" name="image"id="image" width="400" height="400"style="margin-top: -20px;">
</div>
</form>


</div>
</body>
</html>

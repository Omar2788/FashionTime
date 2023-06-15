<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="modifier.css">
</head>
<body>

<?php
 require_once "pdo.php";
 require_once "header.php";
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

<fieldset>
<a href="liste_produit_vendeur.php"class="retour"><i class="bi bi-arrow-left-square-fill"></i> Retour</a>
<h1 class="title">Modifier un Article :</h1>
<label name="id"class="article">Article : <?php echo $id_etd; ?> </label> 
<label for=""class="titredelarticle"><?php echo($nom)?></label>
<div class="modif">
<img src= "images/<?=$photo?>" width="300" height="300">
<div>
    <form action="modifier.php" method="post" enctype="multipart/form-data"class="form">
        <input type="hidden" name="id" id="id" value="<?php echo($id_etd)?>">                
                        
        <label for="nom">Nom :</label> </td><td><input type="text" name="nom" id="nom" value="<?php echo($nom)?>">
        <label for="desp">Description de l'article :</label> </td><td><textarea type="text" name="desp" id="desp" value="<?php echo($desp)?>"><?php echo($desp)?></textarea>

        <label for="prix">Prix :</label> </td><td><input type="text" name="prix" id="prix" value="<?php echo($prix)?>">
        <label for="">changer l'image de l'article :</label>
        <input type="file" name="image"/><br>
        <button type="submit" name="Envoyer" value=""class="btnEnvoyer">Enregistrer</button>
    </form>
</div>
</fieldset>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="modifier.css">
</head>
<body>

<?php
require_once "pdo.php";
require_once "headerAchatdeAcheteur.php";
require_once "session.php";
Verifier_session();

/* récupération des données du formulaire */
$nom = $_GET['nom'];

try {
    $req = "SELECT * FROM visiteur WHERE nom='$nom'";
    $res = $pdo->query($req);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);
    if (count($data) === 1) {
        $nom = $data[0]["nom"];
        $motdepasse = $data[0]["motdepasse"];
    }
} catch (PDOException $e) {
    echo "ERREUR : " . $e->getMessage() . " LIGNE : " . $e->getLine();
}

?>

<fieldset>
<a href="liste_produit_acheteur.php" class="retour"><i class="bi bi-arrow-left-square-fill"></i> Retour</a>
<h1 class="title">Modifier votre compte :</h1>
<label for="" class="titredelarticle"><?php echo ($nom) ?></label>
<div class="modif">
<div>
    <form action="modifiercompte.php" method="post" enctype="multipart/form-data" class="form"style="display: grid;">
    <label for="nom">Nom :</label> </td><td><input type="text" name="nom" id="nom" value="<?php echo ($nom) ?>">
    <label for="motdepasse">Mot de passe :</label> </td><td><input type="password" name="motdepasse" id="motdepasse" value="<?php echo ($motdepasse) ?>">
    <button type="submit" name="Envoyer" value="" class="btnEnvoyer">Enregistrer</button>
    </form>
</div>
</fieldset>
</div>
</body>
</html>

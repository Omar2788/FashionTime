<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require_once "pdo.php";
require_once "session.php";
Verifier_session();
$sql = "SELECT * FROM visiteur WHERE nom='" . $_SESSION["nom"] . "'";
$res = $pdo->query($sql);
?>
    <header class='nav navbar'>
        <span class="gauche"><a href="renommer.php?nom=<?php echo $_SESSION['nom']; ?>"><i class="bi bi-person-circle"></i> <?=$_SESSION["nom"]?></a></span>
        <span class="droite">
            <a href="#liste"><i class="bi bi-list"></i> Liste des Articles </a>
        </span>
        <span class="">
            <a href="liste_achat.php"><i class="bi bi-bag-check-fill"></i> Liste des Achats </a>
        </span>
        <span class="">
            <a href="#contact"><i class="bi bi-phone"></i> Contact </a>
        </span>
        <span class="">
            <a href="deconnexion.php">Déconnexion <i class="bi bi-box-arrow-right"></i></a>
        </span>
        
    </header>
</body>
</html>
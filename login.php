<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">
</head>


<?php
    require_once "pdo.php";
    $nom="";$motdepasse="";
    if (isset($_POST['nom'])){
        $nom=$_POST["nom"];
        $motdepasse=$_POST["motdepasse"];
        try{
            $req="SELECT * FROM visiteur WHERE nom='$nom'and motdepasse='$motdepasse'";
            $res=$pdo->query($req);
            $data=$res->fetchAll(PDO::FETCH_ASSOC);
            $role=$data[0]["role"];
            if($role=="Vendeur"){
                $_SESSION["connecte"]="1";
                $_SESSION["nom"]=$data[0]["nom"];
                header("location:liste_produit_vendeur.php");
                exit();
            }
            else {
                if($role=="Acheteur"){
                    $_SESSION["connecte"]="1";
                    $_SESSION["nom"]=$data[0]["nom"];
                    header("location:liste_produit_acheteur.php");
                    exit();
                }
            }
            header("location:login.php");
            }catch (PDOException $e){
            echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
        }
    }
?>
<body>
    <img class='logo' src="https://scontent.ftun14-1.fna.fbcdn.net/v/t1.15752-9/353663745_1501424123970508_9219876611847822960_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_ohc=lwl3bMgQSxUAX_YMZig&_nc_oc=AQmyEyQJntLXA_5TX6uvsvmPjAk3yrVaXIiLG1HxY_QDVZj_8MY6Pmeg_rcrv4iVEJE&_nc_ht=scontent.ftun14-1.fna&oh=03_AdRd30PLeyvxzrQhzBwkm7UWg1RPDC_KHrLvXzGNwvWdqA&oe=64AEDEB9" alt="">
    <form action="login.php" method="post">
        <table  class='formulaireLogin'>
      <tr> <td> <label for="nom"  >Utilisateur :</label> </td>
      <td> <input type="text" name="nom" class='forminput' id="nom" ><br> </td>  </tr>
        <tr> <td><label for="motdepasse" >Mot de Passe : </label></td>
        <td><input type="password"class='forminput' name="motdepasse" id="motdepasse"> <br> </td> </tr>
        <td> <input type="submit" class='connecter' value="Connecter"></td> 
        <td> <button class="register"><a href="inscriptionForm.php" class="nouvelle">Nouvelle inscription </a></button></td> 

        <table>
    </form>

</body>
</html>

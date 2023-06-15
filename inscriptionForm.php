<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="login.css">


</head>
<body>
<img class='logo' src="https://scontent.ftun14-1.fna.fbcdn.net/v/t1.15752-9/353663745_1501424123970508_9219876611847822960_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_ohc=lwl3bMgQSxUAX_YMZig&_nc_oc=AQmyEyQJntLXA_5TX6uvsvmPjAk3yrVaXIiLG1HxY_QDVZj_8MY6Pmeg_rcrv4iVEJE&_nc_ht=scontent.ftun14-1.fna&oh=03_AdRd30PLeyvxzrQhzBwkm7UWg1RPDC_KHrLvXzGNwvWdqA&oe=64AEDEB9" alt="">
    <form action="inscription.php" method="post">
        <table  class='formulaireLogin'>
      <tr> <td> <label for="nom"  >Utilisateur :</label> </td>
      <td> <input type="text" name="nom" class='forminput' id="nom" ><br> </td>  </tr>
        <tr> <td><label for="motdepasse" >Mot de Passe : </label></td>
        <td><input type="password"class='forminput' name="motdepasse" id="motdepasse"> <br> </td> </tr>
        <tr> <td><label for="role">Vous étes :</label></td>
        <td style="text-align: justify;"><input type="radio"name="role"value="Acheteur"/><b>Acheteur(se)</b><br>Vous pouvez seulement acheter des produits.
        </td>
        <td></tr>
        <tr> <td></td>
        <td style="text-align: justify;"><input type="radio"name="role"value="Vendeur"/><b>Vendeur(se)</b><br>Vous pouvez ajouter, supprimer et modifier des produits.
        </td> </tr>
        <tr> <td> <input type="submit" value="créer un compte" onsubmit="validateForm()"class='connecter'></td> <td>  </td>   </tr>
        <tr> <td> <button class="registerInscription"><a href="login.php"class="nouvelle">vous avez un compte </a></button></td> <td>  </td>   </tr>

        <table>
    </form>
   
<script>
    function validateForm() {
  var x = document.forms["myForm"]["nom"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}

function validateForm() {
  var username = document.getElementById("nom").value;
  var password = document.getElementById("motdepasse").value;

  var usernameValid = /^[a-zA-Z]+$/.test(username);
  var passwordValid = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[a-zA-Z\d@$!%*?&]+$/.test(password);

  if (!usernameValid) {
    alert("Le nom d'utilisateur ne doit contenir que des lettres.");
    return false;
  } else if (!passwordValid) {
    alert("Le mot de passe doit contenir des lettres, des chiffres et des symboles.");
    return false;
  }

  return true;
}
</script>
</body>
</html>
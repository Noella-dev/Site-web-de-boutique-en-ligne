
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connecter admin</title>
</head>
<?php include("formulaireCss.php"); ?>
<body>
   <form action="controllerAdmin.php"  method="post">
   <div class="tableau">
       <div class="FormBox">
            <span class="close">&times;</span>
            <h2>Connexion</h2>
            <div class="inputBox">
                <input type="text" name="nomA" id="nom" required="required">
                <span>Nom</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password"name="passA" id="mdp" required="required">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="conpassA" id="mdp1" required="required">
                <span>Confirmer mot de passe</span>
                <i></i>
            </div>
            <input type="submit" name="connecter" value="Connecter">
            <input type="submit"id="manoratra" name="manoratra" value="S'inscrire">
       </div>
   </div>
  </form> 
</body>
</html>
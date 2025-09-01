<?php     
    try{
      $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
   }catch (Exception $exception){
     die('erreur'.$exception->getMessage());
  }
$identifiant=$bdd->query("SELECT * FROM vi ORDER BY id_vis DESC");
$id=$identifiant->fetch();
 
$resultat=$bdd->prepare("SELECT email_vis,id_vis,Nom_vis,adresse FROM vi WHERE id_vis=:id");
$resultat->execute(array('id'=>$id['id_vis']));
$reponse=$resultat->fetch();
$reponse['adresse'];
$reponse['id_vis'];
$reponse['email_vis'];
$reponse['Nom_vis'];
?>
<input type="hidden" name="mail" readonly="" value="<?php echo $reponse['email_vis']; ?>">
<input type="hidden" name="id_vis" readonly="" value="<?php echo $reponse['id_vis']; ?>">
<input type="hidden" name="nom" readonly="" value="<?php echo $reponse['Nom_vis']; ?>">
<input type="hidden" name="adresse" readonly="" value="<?php echo $reponse['adresse']; ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>connecter admin</title>
</head>
<?php include 'conClientsCSS.php';?>
<body>
   <form action="controllerAdmin.php"  method="post">
   <div class="tableau">
       <div class="FormBox">
            <h2>Sign in</h2>
            <form action="categorieClients.php" method="post">
            <input type="hidden" name="id" id="id"></form>
            <div class="inputBox">
             <input type="text"name="mail" required="required">
              <span>Email</span>
              <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="passA" required="required">
                <span>Mot de passe</span>
                <i></i>
            </div>
            <div class="links">
                <a href="clientsVrai.php">S'inscrire</a>
            </div>
            <input type="submit" name="miconnect" value="Connecter">
        </div>
   </div>
  </form>

</body>
</html>
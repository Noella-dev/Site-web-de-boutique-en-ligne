<?php
 session_start();

  $id= $_SESSION['id_vis'];
  $email=$_SESSION['email_vis'];
  $nom=$_SESSION['Nom_vis'];
  $adresse=$_SESSION['adresse'];
?>
<!--<style>
 .block{
    background:yellow;width:200px;position:relative;margin-top:-20px"
    }
</style>    
<div class="block">
    <span>id:<?php echo $id ?></span>
    <span>Email:<?php echo $email ?></span><br>
    <span>Nom:<?php echo $nom?></span><br>
    <span>Adresse:<?php echo $adresse ?></span>
</div>-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie clients</title>
</head>
<?php include("categorieCSS.php"); ?>
<body>
  <form action="controllerAdmin.php"  method="post">
    <div class="contenu" style="z-index:-1";>
        <div class="header">
            <span class="logo">Noella's boutique</span>
            <img class="slogan" src="../images/slogan.png" width="480px" height="450px"alt="" srcset="">
        </div>
        <div class="navbar">
            <ul>
                <li><a href="categorieClients.php#Acceuil" class="Acceuil" id="btn-acceuil">Acceuil</a></li> 
                <li><a href="listeCateC.php" class="liste">Categorie</a></li> 
                <li><a href="affichageClient.php" type="submit" class="produit"  name="produit" id="btn-produit">Produits</a></li>
                <li><a href="testAffiche.php" class="membres">Membres</a></li> 
                <li><a href="deconnexion.php" name="decoClient"id="btn_con">Deconnexion</a></li>
            </ul>
        </div>
        <button type="submit" name="Panier_clients"><img src="../images/panier1.png" class="panier"  width="50px" height="50px" alt=""></button>
 
        <div class="bienvenu" id="tongasoa">
            <span>Bienvenu sur la page de<br>Noella's boutique</span><br>
        </div>
   </div>

     
  </form>
</body>
</html>

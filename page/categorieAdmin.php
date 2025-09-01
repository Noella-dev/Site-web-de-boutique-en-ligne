<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Categorie Admin</title>
</head>
<?php include("categorieACss.php"); ?>
<body>
  <form action="controllerAdmin.php"  method="post">
    <div id="contenu" style="z-index:-1;">
        <div id="header">
            <span id="logo">Noella's boutique</span>
            <img id="slogan" src="../images/slogan.png" width="480px" height="450px"alt="" srcset="">
        </div>
        <div id="navbar">
            <ul>
                <li><a href="categorieAdmin.php#Acceuil"  id="btn-acceuil">Acceuil</a></li> 
                <li><a href="afficher_categorie.php" name="listeCategorie">Categorie</a></li> 
                <li><a href="produitsAdmin.php"  name="produit" id="btn-produit">Produits</a></li>
                <li><a href="membres.php">Membres</a></li> 
                <li><a href="Debut.php" name="decoAdmin" id="btn_con">Deconnexion</a></li>
            </ul>
        </div>
        <a href="#"><img src="../images/panier1.png" id="panier"  width="50px" height="50px" alt=""></a>
        <div id="tongasoa">
            <span>Bienvenu sur votre page <br>Noella's boutique</span><br>
        </div>

   </div>
   <!--*******************************************acceuil*****************************************************-->
    <div id="Acceuil" style="display:none;">
    <script>
         document.getElementById('btn-acceuil').addEventListener('click',function(){
             var formType = document.getElementById('Acceuil');
             var bienvenu =document.getElementById('tongasoa');
             var span = document.getElementsByClassName("close")[0];
                if (formType.style.display === 'none'){
                    bienvenu.style.display='block';
                }
                
                 span.onclick = function() {
                    formType.style.display = "none";}
                });
    </script>
    </div>
   
 <!--*******************************************acceuil*****************************************************-->
     <!--afficher produit-->
    
     
  </form>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page principale</title>
</head>
<?php include("debutCSS.php"); ?>
<body>
    <div class="contenu" style="z-index:-1";>
        <div class="header">
            <span class="logo">Noella's boutique</span>
            <img class="slogan" src="../images/slogan.png" width="480px" height="450px"alt="" srcset="">
        </div>
        <div class="navbar">
            <ul>
                <li><a href="Debut.php#terme1">Acceuil</a></li> 
                <li><a href="#">Produits</a></li>
                <li><a href="conClients.php" id="btn_connexion">Connexion</a></li>
            </ul>
        </div>
        <a href="#"><img src="../images/panier1.png" class="panier"  width="50px" height="50px" alt=""></a>
        <a href="Debut.php#terme4"><img src="../images/admin3.png" class="admin" id="btn-admin" width="50px" height="50px" alt=""></a>
        <div class="soratra">
            <span>Decouvrez vos articles<br>préferés chez nous</span><br>
            <button type="submit" id="decouvrir">Decouvrir maintenant</button>
        </div>
   </div>
    <script>
        document.getElementById('decouvrir').addEventListener('click',function(){
         alert("Vaux mieux se connecter!!!");
        });
    </script>
    <!------------------------------------------------------------------------------------------------>
    <!-- Page de connexion d'admin-->
    <div id="terme4" class="terme4" style="display:none";>
        <?php include("formulaire.php"); ?>
        <script>
            document.getElementById('btn-admin').addEventListener('click',function(){
                var formAdmin = document.getElementById('terme4');
                var span = document.getElementsByClassName("close")[0];
                    
                formAdmin.style.display = "block";
                span.onclick = function() {
                formAdmin.style.display = "none";
                }
            });
       </script>
    </div>
    <!------------------------------------------------------------------------------------------------>
 
</body>
</html>

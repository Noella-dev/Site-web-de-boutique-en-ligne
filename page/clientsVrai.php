<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecter visiteurs</title>
</head>
<?php include("clientsCSS.php"); ?>
<body>
   <form action="controllerAdmin.php"  method="post">
   <div class="tableau" id="visiteurs">
       <div class="FormBox" id="form">
            <span class="close">&times;</span>
            <h2>Inscription</h2>
            <div class="gauche">
                <div class="inputBox">
                    <input type="file" name="sary" id="profil" required="required">
                    <span>Profil</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="nom" id="username" required="required">
                    <span>Nom</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="prenom" id="userlastname" required="required">
                    <span>Prenom</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="date" name="date" id="date1" required="required"><br>
                    <span>Date de naissance</span>
                    <i></i>
                </div>
            </div>
            <div class="droite">
                <div class="inputBox">
                    <input type="text" name="mail"id="email" required="required">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="adresse"  id="adress" required="required">
                    <span>Adresse</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password"name="passA" id="password" required="required">
                    <span>Mot de passe</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="conpassA" id="password2" required="required">
                    <span>Confirmer mot de passe</span>
                    <i></i>
                </div>
                <button type="submit" id="btn_incrit" name="inscrire" value="inscrit">S'inscrire</button>
            </div>
       </div>
   </div>
   <script>
        var formVisiteurs = document.getElementById('visiteurs');
        var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                formVisiteurs.style.display = "none";
            }
    </script>
</form>
</body>
</html>
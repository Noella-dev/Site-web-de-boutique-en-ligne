
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
   <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
}catch (Exception $exception){
    die('erreur'.$exception->getMessage());
}?> 
<body>
<div class="container py-2">
    <div class="container">
        <div class="row">
            <?php
             $membre=$bdd->query('SELECT * FROM vi')->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($membre);
             foreach($membre as $membres){
                ?>
                <div class="card mb-3 col-md-4" style="height:320px; margin: 2px 10px;">
                    <img src="../images/<?php echo $membres['Profil']?>" alt="Card image" width="150%" height="200"  class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $membres['Nom_vis']," ",$membres['Prenom_vis'] ?></h5>
                        <p class="card-text"><small class="text-muted"><?php echo $membres['id_vis']?></small></p>
                   </div>
               </div><?php
               }?>
        </div>
    </div>
</div>

<div id="style">
              <span class="close">&times;</span>
                <div id="partie1">
                        <div id="Robe">
                            <div id="sary"><img src="../images/robe.jpg" width="150px" height="150px"alt="" srcset=""></div>
                            <p>Robes</p>
                        </div>
                        <div id="Pull">
                            <div id="sary"><img src="../images/pull1.jpg" width="150px" height="150px"alt="" srcset=""></div>
                            <p>Pull</p>
                        </div>
                        <div id="particulier">
                            <div id="sary"><img src="../images/particulier1.png" width="150px" height="150px"alt="" srcset=""></div>
                            <p>Divers</p>
                        </div>
                </div>
                <div id="partie2">
                      <div id="kiraro">
                            <div id="sary"><img src="../images/robe2.jpg" width="150px" height="150px"alt="" srcset=""></div>
                            <p id="chaussure">Specialités</p>
                        </div>
                        <div id="t-shirt">
                            <div id="sary"><img src="../images/t-shirt4H.jpg" width="150px" height="150px"alt="" srcset=""></div>
                            <p>Tshirt</p>
                        </div>
                       
                        <div id="jupe">
                            <div id="sary"><img src="../images/combi-short.jpg" width="150px" height="150px"alt="" srcset=""></div>
                            <p id="pantalon">Jupes/Pantalon...</p>
                        </div>
                       
                </div>
                <div id="partie3">
                        <ul>
                            <li><a href="categorieAdmin.php#Ajouters" name="ajouter_cat" id="btn_ajouter">Ajouter</a></li> 
                            <li><a href="afficher_categorie.php" name="afficher" id="btn_affiche">Afficher</a></li>
                            <li><a href="categorieAdmin.php#Modifier" id="btn_modifie">Modifier</a></li> 
                            <li><a href="categorieAdmin.php#Supprimer" id="btn_supprime">Supprimer</a></li>
                        </ul>
                </div>
            </div>


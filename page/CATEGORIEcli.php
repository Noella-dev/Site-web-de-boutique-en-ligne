<?php    
    session_start();
    echo 'Identifiant:'. $_SESSION['id_vis'].'  /'.'Nom:'. $_SESSION['Nom_vis'].'  /'.'Email:'.$_SESSION['email_vis'].'  /'.'Adresse:'.$_SESSION['adresse'];
    try{
      $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
    }catch (Exception $exception){
      die('erreur'.$exception->getMessage());
    }
   $category=$bdd->query('SELECT*FROM categories')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../font/fontawesome-free-5.15.4-web/css/all.css">
    <title>Listes des produits</title>
</head>
<body>
<?php
    if(isset($_GET['categories']))
    {   
      $donnees=$bdd->prepare("SELECT * FROM produits WHERE Categorie=:cat");
      $donnees->execute(array('cat'=>$_GET['categories']));
      $affiche=$donnees->fetchAll();
      if ($affiche==[]){?>
        <div class="card bg-danger text-white">
           <div class="card-body">Pas de produits pour l'instant</div>
        </div><?php
      }
      else{
        foreach($affiche as $produit){?>
            <div class="lien">
              <a href="afficherDetails.php?categories=<?php echo $produit['id_prod']?>" class="btn btn-default">Afficher details</a>
            </div>
            <div class="card mb-3 col-md-2">
                <img src="../images/<?php echo $produit['Photos']?>"  class="img img-fluid" width="220">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $produit["Titre"];?></h4><hr>
                        <span class="card-text"><?php echo $produit["Prix"];?></span>
                        <button type="submit"class="btn bg-danger" name="panier" id="panier"><a href="panier.php?categories=<?php echo $produit['id_prod'] ?>">
                        <img src="../images/panier1.png" class="panier"  width="30px" height="30px" alt=""></a></button>
                    </div>
                    <style>
                      #panier{
                        margin-left:100px;
                        margin-top:-10px;
                      }
                    </style>
                </div>
            </div>
           <?php } 
      }
    }
  ?>
</body>
</html>
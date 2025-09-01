<title>Faire votre panier</title>
<link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
<form action="controllerAdmin.php" method="post">
   <?php session_start();

        try{
          $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
      }catch (Exception $exception){
          die('erreur'.$exception->getMessage());
      }
      echo 'Identifiant:'. $_SESSION['id_vis'].'  /'.'Nom:'. $_SESSION['Nom_vis'].'  /'.'Email:'.$_SESSION['email_vis'].'  /'.'Adresse:'.$_SESSION['adresse'];
      if(isset($_GET['categories']))
      { 
      $Categorie=$bdd->prepare("SELECT * FROM produits WHERE id_prod=:id");
      $Categorie->execute(array('id'=>$_GET['categories']));
      $affiche=$Categorie->fetchAll();
      foreach($affiche as $valeur){ ?>
        <p></p>    
        <div class="container">
            <div class="row">
            <a href="listeCateC.php"style="position:relative;margin-left:100%;"><img src="../images/retour1.png" class="panier"  width="50px" height="50px" alt=""></a>
                <div class="col-md-6" style="margin-top:-10px;">
                  <img src="../images/<?=$valeur['Photos']?>" alt="" class="img img-fluid">
                  <?php $_SESSION['Photos']=$valeur['Photos'] ?>
                </div>
                <div class="col-md-6" style="margin-top:15px;">
                  <h1><?php echo $valeur['Titre']?></h1>
                  <?php $_SESSION['Titre']=$valeur['Titre'] ?>
                  <hr>
                  <h2>
                  <span class="btn bg-warning"><?php echo $valeur["Prix"];?></span>
                  <?php $_SESSION['Prix']=$valeur['Prix'] ?>
                  </h2>
                  <hr>
                  <div class="d-flex">
                    <h5 class="mx-3">
                        Quantite:<input type="number" name="qty"min="0" max="<?php echo $valeur['Stock'];?>" class="form-control"style="width:80px;" id="">                
                    </h5>
                    <h5 class="mx-3">
                        <span>
                            La date:<input type="date" class="form-control" name="date">
                        </span>
                    </h5>
                  </div>
                  <hr>
                  <div class="counter d-flex">
                    <span>Paiement:</span>  
                    <select name="paiement" id="">
                      <option value="airtel">Airtel Money</option>
                      <option value="mvola">Mvola</option>
                      <option value="orange">Orange</option>
                    </select>     
                  </div>
                   <hr>
                      <button type="submit"class="btn btn-success"name="panier">Effectuer</button>
                </div>
              </div>
          </div>
          <?php
          }
        }
         ?>
</form>
<!-- <strong class="mx-5"style="font-size:20px;">Total: ...</strong>--->
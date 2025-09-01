<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdd</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<?php  include 'pageCSS.php';?>
<body>
<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
}catch (Exception $exception){
    die('erreur'.$exception->getMessage());
}?>

            <?php 
            if(isset($_GET['categories']))
            { 
            $Categorie=$bdd->prepare("SELECT * FROM produits WHERE id_prod=:cat");
            $Categorie->execute(array('cat'=>$_GET['categories']));
            $affiche=$Categorie->fetchAll();
              foreach($affiche as $valeur){
                ?>
            <p></p>    
            <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <img src="../images/<?=$valeur['Photos']?>" alt="" class="img img-fluid">
                  </div>
                  <div class="col-md-6">
                        <h1><?php echo $valeur['Titre']?></h1>
                        <hr>
                        <p><?php echo $valeur["Description"];?></p>
                        <hr>
                        <h2>
                        <span class="btn bg-warning"><?php echo $valeur["Prix"];?></span>
                        </h2>
                        <hr>
                        <div class="d-flex">
                        <h5 class="mx-3">
                        <span>
                            Taille:<?php echo $valeur["Taille"];?>
                        </span>
                        </h5>
                        <h5 class="mx-3">
                        <span>
                            Nombre en stock:<?php echo $valeur["Nombre"];?>
                        </span>
                        </h5>
                    </div>
                      <hr>
                      <div class="counter d-flex">
                      <?php  include '../page/assets/counterJS.php'; ?>
                           <button class="btn btn-primary mx-2" id="counter-plus">+</button>
                           <input type="number" class="form-control" name="qty" id="qty"  min="0" max=<?php echo $valeur['Stock']?>>
                           <button class="btn btn-primary mx-2 counter-moins">-</button>
                      </div>
                      <hr>
                      <a href="#" class="btn bg-danger"><img src="../images/panier1.png" class="panier"  width="30px" height="30px" alt=""></a>
                  </div>
              </div>
          </div>
          <?php
          }}

          echo 'Identifiant:'. $_SESSION['id_vis'].'  /'.'Nom:'. $_SESSION['Nom_vis'].'  /'.'Email:'.$_SESSION['email_vis'].'  /'.'Adresse:'.$_SESSION['adresse'];
?>
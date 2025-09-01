<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
}catch (Exception $exception){
    die('erreur'.$exception->getMessage());
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bdd</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<?php include 'pageCSS.php'; ?>
<body>
       <form action="controllerAdmin.php" class="d-flex" method="post">
        <hr>
        <?php
           $_SESSION['id']=$_POST['id'];
            $_SESSION['qty']=$_POST['qty'];
           $_SESSION['titre'] = $_POST['titre'];
           $_SESSION['prix'] = $_POST['prix'];
            $_SESSION['PrixUnitaire'] = $_POST['prixUnit'];
           $_SESSION['PrixUnitaire'] = 0;
           $_SESSION['PrixUnitaire'] += $_SESSION['prix'] * $_SESSION['qty'];
           $_SESSION['total']= $_POST['total'];
            $_SESSION['total']=0;
          $_SESSION['total'] +=  $_SESSION['PrixUnitaire'];?>
            <!--affichage-->
         <span class="btn btn-danger">id:<?php echo $_SESSION['id']; ?></span><br>
         <span class="btn btn-warning">Quantite:<?php echo $_SESSION['qty'];?></span><br>
        <span class="btn btn-danger">Titre:<?php echo $_SESSION['titre']; ?></span><br>
        <span class="btn btn-warning">Prix:<?php echo $_SESSION['prix'];?></span><br>
        <span class="btn btn-warning">PrixUnitaire:<?php echo $_SESSION['PrixUnitaire'];?></span><br>
       <span class="btn btn-warning">Total:<?php echo $_SESSION['PrixUnitaire'];?></span><br>
        <button type="text">Faire le paiement avec:
                            <select name="paiement" id="">
                                <option value="Mvola">Mvola</option>
                                <option value="Airtel">Airtel Money</option>
                                <option value="Orange">orange Money</option>
                            </select>
                            <button type="submit"class="btn bg-success"name="valider">Valider au panier</button>
        </form> 
 </body>
 </html>
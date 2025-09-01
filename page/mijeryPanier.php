<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bdd</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
<?php  session_start();
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
  }catch (Exception $exception){
    die('erreur'.$exception->getMessage());
  }?>
  <div class="container">
        <table style="z-index:-1;">
          <tr>
              <td width="8%">#</td>
              <td width="25%">Titre</td>
              <td  width="8%">Prix</td>
              <td  width="20%">Quantite</td>
              <td  width="20%">Paiement</td>
              <td width="8%">Total</td>
              <td width="10%">Photos</td>
              <td width="20%">Operations</td>
          </tr>
            <?php    
             $panier=$bdd->query("SELECT * FROM panier")->fetchAll(PDO::FETCH_ASSOC);
             foreach($panier as $mijery){
                ?>
          <tr>
                       <td><?php echo $mijery['idPanier'];?></td>
                         <td><?php echo $mijery['TitreCli']?></td>
                         <td><?php echo $mijery['PrixCli']?></td>
                         <td><?php echo $mijery['QteCli']?></td>
                         <td><?php echo $mijery['PaiementCLi']?></td>
                         <td><?php echo $mijery['TotalCli']?></td>
                         <td>Photos</td>                         
                         <td>Modifier</td>
          </tr>
          <?php
          }?>
       </table>
   </div>
      

  
  
    
    
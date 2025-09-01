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
<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
}catch (Exception $exception){
    die('erreur'.$exception->getMessage());
}?>
        <table style="z-index:-1;">
          <tr>
              <td width="8%">Id</td>
              <td width="25%">Photos</td>
              <td  width="8%">Titre</td>
              <td  width="20%">Description</td>
              <td  width="20%">Categorie</td>
              <td width="8%">Taille</td>
              <td width="10%">Prix</td>
              <td width="8%">Stock</td>
              <td width="20%">Operations</td>
          </tr>
            <?php 
            $Categorie=$bdd->query("SELECT produits.*,categories.categories as 'categories' FROM produits INNER JOIN categories ON produits.Categorie=categories.id_Cat")->fetchAll(PDO::FETCH_ASSOC);
              foreach($Categorie as $valeur){
                ?>
          <tr>
               <td><?php echo $valeur["id_prod"];?></td>
               <td><img class="img img-fluid" width="220" src="../images/<?=$valeur['Photos']?>" alt=""></td>
               <td><?php echo $valeur["Titre"];?></td>
               <td><?php echo $valeur["Description"];?></td>
               <td><?php echo $valeur['categories']  ?></td>
               <td><?php echo $valeur["Taille"];?></td>
               <td><?php echo $valeur["Prix"];?></td>
               <td><?php echo $valeur["Stock"];?></td>
               <td width="20px">
                    <form action="controllerAdmin.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $valeur['id_prod']?>" id="">
                        <input type="submit"class="btn btn-primary btn-sm" name="modifier_prod" value="Modifier">
                    </form>
                </td>
                <td>    
                    <form action="controllerAdmin.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $valeur['id_prod']?>" id="">
                        <input type="submit"class="btn btn-danger btn-sm" name="supprimer_prod" value="Supprimer">
                   </form>
                </td>
          </tr>
          <?php
          }?>
       

<?php 
    session_start();
    echo 'Identifiant:'. $_SESSION['id_vis'].'  /'.'Nom:'. $_SESSION['Nom_vis'].'  /'.'Email:'.$_SESSION['email_vis'].'  /'.'Adresse:'.$_SESSION['adresse'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des categories</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../font/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <?php  $id= $_SESSION['id_vis'];?>
    <form action="controllerAdmin.php" method="post">
      <button type="submit" class="btn float-end"name="Panier_clients"><img src="../images/panier1.png" class="panier"  width="30px" height="30px" alt="">Panier(xx)</button>
    </form>
    <div class="container py-2">
        <h4>Listes des categories</h4>
        <?php
            try{
                $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
            }catch (Exception $exception){
                die('erreur'.$exception->getMessage());
            }
            $category=$bdd->query('SELECT*FROM categories')->fetchAll(PDO::FETCH_ASSOC);
          ?>
    
        <ul class="list-group list-group-flush w-25">
            <?php
               foreach($category as $categorit){
            ?>
            <li class="list-group-item">
              <a href="CATEGORIEcli.php?categories=<?php echo $categorit['id_Cat']?>" class="btn btn-default">
                   <?php echo $categorit['categories'] ?>
              </a>
            </li>
            <?php }?>
        </ul>
    </div>
</body>
</html>


   
    

   
           

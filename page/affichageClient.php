<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Listes des produits</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
<?php
try{
    $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
}catch (Exception $exception){
    die('erreur'.$exception->getMessage());
}
?>

<div class="container-fluid">
    <h2>Les differents produits</h2>
    <div class="row">
        <?php
        $requette=$bdd->query('SELECT * FROM produits')->fetchAll(PDO::FETCH_ASSOC);
        foreach($requette as $produits){?>
        <div class="card img-fluid mb-3 col-md-4" style="width: 250px;height:300px; margin: 2px 20px;">
            <img src="../images/<?php echo $produits['Photos']?>" class="img img-fluid" width="220"alt="Card image" class="card-img-top">
            <div class="card-img-overlay">
                    <h4 class="card-title" style="margin-top:50px"><?php echo $produits["Titre"];?></h4>
                    <a href="panier.php?categories=<?php echo $produits['id_prod']?>" class="btn bg-danger" style="margin-top:150px;margin-left:180px"><img src="../images/panier1.png" class="panier"  width="30px" height="30px" alt=""></a>
            </div>
        </div>
        <?php
        }?>
    </div>
</div>

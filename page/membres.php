<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membres</title>
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
<div class="container py-2">
    <h2>Liste des membres</h2>
    <table class="table-stripped table-hover">
        <thead>
            <tr>
                <th width="10%">#id</th>
                <th width="30%">Profil</th>
                <th width="20%">Nom</th>
                <th width="20%">Prenom</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $membre=$bdd->query('SELECT * FROM vi')->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($membre);
             foreach($membre as $membres){
                 ?>
                 <tr>
                    <td><?php echo $membres['id_vis'] ?></td>
                   <td><img src="../images/<?php echo $membres['Profil']?>" style="border-radius:50%;" width="200px"  height="200px"></td>
                    <td><?php echo $membres['Nom_vis'] ?></td>
                    <td><?php echo $membres['Prenom_vis']?></td>
                    <td>
                        <form action="controllerAdmin.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $membres['id_vis']?>" id="">
                            <input type="submit" class="btn btn-danger btn-sm"name="supprimer_membre" value="Supprimer">
                        </form>
                    </td>
                 </tr><?php
             }
            
            ?>
        </tbody>
    </table>
</div>
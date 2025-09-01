<?php
    include 'afficher_categorieCSS.php';
    try{
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
    }catch (Exception $exception){
        die('erreur'.$exception->getMessage());
    }?>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">

<input type="submit"class="bouton-ajouter" id="btn_ajouter" value="Ajouter categorie">
<!--*******************************************formulaire des categories**************************************************-->
    <div id="ajouters" style="display:none;">
        <form action="controllerAdmin.php" method="post">
            <label form="form-label" for="categories">Nom du categorie</label>
            <input type="text"class="form-control" name="nom_cat" id="">
            <label form="form-label" for="images">Image du categorie</label>
            <input type="file"class="form-control" name="image_cat" id="">
            <input type="submit" value="Ajouter categorie" class="btn btn-warning my-2" name="ajouter_categorie">
        </form>
       <script>
            document.getElementById('btn_ajouter').addEventListener('click',function(){
               var formCategorie = document.getElementById('ajouters');
               var exit = document.getElementsByClassName("close")[0];
                if (formCategorie.style.display === 'none'){
                    formCategorie.style.display='block';
                    formCategorie.style.position="absolute";
                    formCategorie.style.zIndex='4';
                }else{
                    formCategorie.style.display = 'none';
                }
                exit.onclick = function() {
                    formCategorie.style.display = "none";
                }
                });
        </script>
    </div>

<!----------------------------------------------affichage categorie--------------------------------------------------------------------------->
<div class="container py-2">
    <table class="table-stripped table hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Categorie</th>
                <th>Image</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $category=$bdd->query('SELECT*FROM categories')->fetchAll(PDO::FETCH_ASSOC);
                  //  var_dump($category);
                    foreach($category as $categorit){
                ?>
                <tr>
                    <td><?php echo $categorit['id_Cat'] ?></td>
                    <td><?php echo $categorit['categories'] ?></td>
                    <td><img src="../images/<?php echo $categorit['images']?>" class="img img-fluid" width="220"></td>
                    <td width="20px">
                        <form action="controllerAdmin.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $categorit['id_Cat']?>" id="">
                            <input type="submit"class="btn btn-primary btn-sm" name="modifier_cat" value="Modifier">
                        </form>
                    </td>
                    <td>    
                        <form action="controllerAdmin.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $categorit['id_Cat']?>" id="">
                          <input type="submit"class="btn btn-danger btn-sm" name="supprimer_cat" value="Supprimer">
                        </form>
                    </td>
                </tr><?php
            }?>
       </tbody>
    </table>
</div>
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter_produit</title>
</head>
<?php include('produitCSS.php');
    try{
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
    }catch (Exception $exception){
        die('erreur'.$exception->getMessage());
    }
?>
<body>
   <input type="submit"class="bouton-ajouter" id="btn_ajouter" value="Ajouter produit">
    <!--*******************************************formulaire produits*****************************************************-->
    <form action="controllerAdmin.php"  method="post">
    <div class="tableau" id="Ajouters" style="display:none;">
       <div class="FormBox" id="form">
            <span class="close">&times;</span>
            <div class="gauche">
                    <?php
                        $makaCategorie=$bdd->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
                    ?>
                 <div class="inputBox">
                       <select name="categorie">
                           <option value="">Choisissez une Categorie</option>
                           <?php
                           foreach ( $makaCategorie as $category) {
                               echo" <option value='".$category['id_Cat']."'>".$category['categories']."</option>";
                           }
                           ?>
                        </select>
                    <i></i>
                  </div>
                <div class="inputBox">
                    <input type="file" name="sary" id="profil" required="required">
                    <span>Photos</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="titre" id="titres" required="required">
                    <span>Titre</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="description" id="description" required="required">
                    <span>Description</span>
                    <i></i>
                </div>
            </div>
            <div class="droite">
                <div class="inputBox">
                       <select name="taille">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    <i></i>
                </div>
               
                <div class="inputBox">
                       <select name="public">
                            <option value="F">Femme</option>
                            <option value="H">Homme</option><br>
                       </select>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text"name="prix" id="prix" required="required">
                    <span>Prix</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="number" name="nombre" id="nombre" required="required">
                    <span>Nombre</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="number" name="stock" id="stock" required="required">
                    <span>Stock</span>
                    <i></i>
                </div>
                <button type="submit" id="ajouter" name="ajouter_produit" value="Ajout du produit">Ajouter</button>
            </div>
       </div>
       <script>
            document.getElementById('btn_ajouter').addEventListener('click',function(){
               var formProduit = document.getElementById('Ajouters');
               var exit = document.getElementsByClassName("close")[0];
                if (formProduit.style.display === 'none'){
                    formProduit.style.display='block';
                    formProduit.style.position="absolute";
                    formProduit.style.zIndex="3";
                }else{
                    formProduit.style.display = 'none';
                }
                exit.onclick = function() {
                formProduit.style.display = "none";
                }
                });
        </script>
   </div>
    </form>
   <?php include('AffichageProduit.php')  ?>
</body>
</html>


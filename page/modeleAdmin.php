
<?php
     session_start();
    try{
        $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
    }catch (Exception $exception){
        die('erreur'.$exception->getMessage());
    }

    /************************************ ajouter admin************************************************************ */
function Connecter($bdd){ 

    $Nom_adm=$_POST['nomA'];
    $MotDePasse=sha1($_POST['passA']);
    $ConMdp=sha1($_POST['conpassA']);

   if($MotDePasse === $ConMdp){
    $connecter=$bdd->prepare('INSERT INTO admin(Nom_adm,MotDePasse,ConMdp)
    VALUES(:nom, :pass, :conpass)');
       $connecter->execute(array(
           'nom'=>$Nom_adm,
           'pass'=>$MotDePasse,
           'conpass'=>$ConMdp
       )
   );
   echo 'insertion de donnee avec succees';
   header("location:categorieAdmin.php");
   }
   else{?>
     <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
        <div class="card bg-danger text-white">
           <div class="card-body">Mot de passe ne correspondent pas</div>
        </div>
        <a href="Debut.php">Retour</a>
     <?php
   }

}
 /***************************************recuperer admin********************************************************* */
 
function recuperer($bdd){
   session_start();
    $Nom_adm=$_POST['nomA'];
    $MotDePasse=$_POST['passA'];
    $ConMdp=$_POST['conpassA'];
    if($_POST){
        $resultat=$bdd->query("SELECT * FROM admin WHERE Nom_adm='$_POST[nomA]' AND MotDePasse='$_POST[passA]' ")->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultat as $membre){
        if($membre['MotDePasse'] == $_POST['passA']){
            foreach($membre as $indice => $element){
                if($indice != 'MotDePasse'){
                    $_SESSION['membre'][$indice]=$element;
                }
            }
                header("location:categorieAdmin.php");
        }
        else{
            echo 'erreur';
        }
        }
    }
   
}
/*******************************************ajouter produit***************************************************** */
function Ajouter_produit($bdd){

   $Categorie=$_POST['categorie'];
    $Photos=$_POST['sary'];
    $Titre=$_POST['titre'];
    $Description=$_POST['description'];
    $Taille=$_POST['taille'];
    $Public=$_POST['public'];
    $Prix=$_POST['prix'];
    $Nombre=$_POST['nombre'];
    $Stock=$_POST['stock'];
      
       // echo "categorie:$Categorie, Photos:$Photos, TItre:$Titre, Desxri:$Description, Taille:$Taille, Pub:$Public, prix:$Prix, NOmbre:$Nombre, stock:$Stock";
     $enregistrer=$bdd->prepare("INSERT INTO produits(Categorie,Photos,Titre,Description,Taille,Public,Prix,Nombre,Stock)
     VALUES(:categorie, :photo, :titre, :description, :taille, :public, :prix, :nombre, :stock)");
        $enregistrer->execute(array(
            'categorie'=>$Categorie,
            'photo'=>$Photos,
            'titre'=>$Titre,
            'description'=>$Description,
            'taille'=>$Taille,
            'public'=>$Public,
            'prix'=>$Prix,
            'nombre'=>$Nombre,
            'stock'=>$Stock
        )
    );
   
 

}
/*******************************************ajouter clients***************************************************** */
function Ajouter_clients($bdd){

    $Profil=$_POST['sary'];
    $Nom_vis=$_POST['nom'];
    $Prenom_vis=$_POST['prenom'];
    $email_vis=$_POST['mail'];
    $adresse=$_POST['adresse'];
    $date_nais=$_POST['date'];
    $pass=sha1($_POST['passA']);
    $pass2=sha1($_POST['conpassA']);

    if($pass === $pass2){
   $inserer=$bdd->prepare('INSERT INTO vi(Profil,Nom_vis,Prenom_vis,email_vis,adresse,date_nais,pass,pass2)
       VALUES(:profil, :nom, :prenom, :mail, :adresse, :date2, :pass, :pass2)');
       $inserer->execute(array(
           'profil'=>$Profil,
           'nom'=>$Nom_vis,
           'prenom'=>$Prenom_vis,
           'mail'=>$email_vis,
           'adresse'=>$adresse,
           'date2'=>$date_nais,
           'pass'=>$pass,
           'pass2'=>$pass2

       )
   );
   header('location:conClients.php'); 
   }
   else{?>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
       <div class="card bg-danger text-white">
         <div class="card-body">Mot de passe ne correspondent pas</div>
       </div>
       <a href="clientsVrai.php">Retour</a>
    <?php
  }
}
/*******************************************recuperer clients***************************************************** */
function recupererClients($bdd){
    $email_vis=$_POST['mail'];
    $pass=sha1($_POST['passA']);

    $_SESSION['id_vis']=$_POST['id_vis'];
    $_SESSION['email_vis']=$_POST['mail'];
    $_SESSION['Nom_vis']=$_POST['nom'];
    $_SESSION['adresse']=$_POST['adresse'];

     if($_POST){
         $resultat=$bdd->query("SELECT * FROM vi WHERE pass='$_POST[passA]' AND email_vis='$_POST[mail]'")->fetchAll(PDO::FETCH_ASSOC);
         foreach($resultat as $membre){
         if($membre['email_vis'] == $_POST['mail'] && $membre['pass'] == $_POST['passA']){
             foreach($membre as $indice => $element){
                 if($indice != 'pass' && $indice != 'email_vis'){
                     $_SESSION['membre'][$indice]=$element;
                 }
             }  
             $_SESSION['id_vis']=$membre['id_vis'];
             $_SESSION['email_vis']=$membre['email_vis'];
             $_SESSION['Nom_vis']=$membre['Nom_vis'];
             $_SESSION['adresse']=$membre['adresse'];
          header("location:categorieClients.php");
         }
         else{
             echo 'erreur';
         }
         }
     }
    
 }

/*****************************************ajouter categories***************************************************** */
function Ajouter_categories($bdd){
        $categories=$_POST['nom_cat'];
        $images=$_POST['image_cat'];

        $Ajouter=$bdd->prepare('INSERT INTO categories(categories,images) 
        VALUES(:categorie, :images)');
        $Ajouter->execute(array(
            
           'categorie'=>$_POST['nom_cat'],
           'images'=>$_POST['image_cat']
        )
    );

    header('location:afficher_categorie.php');
    
}  
/*****************************************ajouter panier***************************************************** */
function creationPanier($bdd){

   $_SESSION['id_vis'];
   $_SESSION['Nom_vis'];
   $_SESSION['email_vis'];
   $_SESSION['adresse'];
   $_SESSION['Titre'];   
   $_SESSION['Photos'];   
   $_SESSION['Prix'];   
    $QteCli=$_POST['qty'];
    $DateCli=$_POST['date'];
    $PaiementCLi=$_POST['paiement'];

    
    $Ajouter=$bdd->prepare('INSERT INTO panier(id_vis,NomCli,EmailCli,AdresseCli,PhotoCli,PrixCli,TitreCli,QteCli,DateCli,PaiementCLi) 
        VALUES(:id, :nom, :mail, :adresse, :photo, :prix, :titre, :qte, :dater, :payer)');
        $Ajouter->execute(array(
        'id'=>$_SESSION['id_vis'],
        'nom'=>$_SESSION['Nom_vis'],
        'mail'=>$_SESSION['email_vis'],
        'adresse'=>$_SESSION['adresse'],
        'photo'=> $_SESSION['Photos'],   
        'prix'=> $_SESSION['Prix'],
        'titre'=>$_SESSION['Titre'],
        'qte'=>$_POST['qty'],
        'dater'=>$_POST['date'],
        'payer'=>$_POST['paiement']     
    ));

    echo'nahazo panier annn';
    $TotalCli = $_SESSION['Prix'] * $_POST['qty'];
    $identifiant=$bdd->query("SELECT * FROM panier ORDER BY idPanier DESC");
    $id=$identifiant->fetch();
   
   $resultat=$bdd->prepare("UPDATE panier SET TotalCli=:totaly WHERE idPanier=:id");
   $resultat->execute(array('totaly'=>$TotalCli,'id'=>$id['idPanier'] ));
   header('location:categorieClients.php');
}
/*****************************************mijery panier clients ***************************************************** */
function afficher_Panier_clients($bdd){
   $_SESSION['id_vis'];   ?>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <div class="container">
        <div class="d-flex">
        <h4>Votre Panier</h4>
        <form action="" method="post">
          <button type="submit" class="btn btn-success" name="pdf_panier"style="margin-left:75%">Valider Panier</button>
        </form>
        </div>
                 <table class="table">
                     <thead>
                     <tr>
                         <th width="8%">#</th>
                         <th width="15%">Titre</th>
                         <th width="15%">Image</th>
                         <th width="10%">Date</th>
                         <th width="8%">Prix</th>
                         <th width="8%">Quantite</th>
                         <th width="10%">Paiement</th>
                         <th width="10%">Total</th>
                         <th width="8%">Actions</th>
                     </tr>
                     </thead>
                <?php
                    $panier=$bdd->prepare('SELECT * FROM panier WHERE id_vis=:id');
                    $panier->execute(array('id'=>$_SESSION['id_vis']));
                    $sql=$panier->fetchAll();
                    $total=0;
                    if ($sql==[]){?>
                        <div class="card bg-danger text-white">
                           <div class="card-body">Pas de produits pour l'instant</div>
                        </div><?php
                    }
                    else{
                    foreach($sql as $mijery){
                       
                        $total+=$mijery['TotalCli'];
                       ?>
                <tr>
                      <td><?php echo $mijery['idPanier'];?></td>
                      <td><?php echo $mijery['TitreCli']?></td>
                      <td><img  class="img img-fluid" width="80px" src="../images/<?php echo $mijery['PhotoCli']?>" alt=""></td>
                      <td><?php echo $mijery['DateCli']?></td>
                      <td><?php echo $mijery['PrixCli']?></td>
                      <td><?php echo $mijery['QteCli']?></td>
                      <td><?php echo $mijery['PaiementCLi']?></td>
                      <td><?php echo $mijery['TotalCli']?></td>
                      <td>
                            <form action="controllerAdmin.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $mijery['idPanier']?>" id="">
                                <button type="submit" class="btn float-end" name="modifier-panier"><img src="../images/modif.png" class="img img-fluid" width="50px" alt=""></button>
                            </form>
                      </td>
                      <td>    
                            <form action="controllerAdmin.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $mijery['idPanier']?>" id="">
                                <button type="submit" class="btn float" name="supprimer-panier"><img src="../images/sup2.jpeg" class="img img-fluid" width="53px" alt=""style="margin-top:12px;">
                           </form>
                       </td>
                </tr>
                <?php }}?>
                <tfoot>
                    <tr>
                        <td colspan="6" align=right><strong>Total</strong></td>
                        <td><?php echo $total; ?>Ariary</td>
                    </tr>
                </tfoot>
                </table>
    </div>
      <?php
}

/*****************************************panier pdf client***************************************************** */
function pdf_panier_client($bdd){
    $_SESSION['id_vis'];
    $res_panier=$bdd->prepare('SELECT * FROM panier WHERE id_vis=:id');
    $res_panier->execute(array('id'=>$_SESSION['id_vis']));
    $sql=$res_panier->fetchAll();
    
    include('../fpdf186/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();


    $pdf->SetFont('Arial','',10);
    $h=7;
    $pdf->Write($h,"Merci de nous avoir visité et acheter notre produit,voila votre liste de commande:");
    $pdf->Ln();
    /*heading of the table */
    $pdf->SetFont('Arial','B',10);
    $pdf->cell(0,10,"Voici votre liste de panier",0,1,'c');

    //$pdf->cell(60,6,"Images",1,0,'c');
    $pdf->cell(30,6,"Titre",1,0,'c');
    $pdf->cell(23,6,"Prix",1,0,'c');
    $pdf->cell(23,6,"Quantite",1,0,'c');
    $pdf->cell(20,6,"Paiement",1,0,'c');
    $pdf->cell(25,6,"Total",1,1,'c');/**end of line */

    /*heading of the table end */
    $total=0;     
    foreach($sql as $affiche){
        $total+=$affiche['TotalCli']; 
       // $tempImagePath='img src=../images/'.$affiche['PhotoCli'];
          // $tempImagePath->Image('../Images/'.$affiche['PhotoCli']);
           // $pdf->cell(60,6, $tempImagePath,1,0,'R');
            $pdf->cell(30,6, $affiche['TitreCli'],1,0,'R');
            $pdf->cell(23,6, $affiche['PrixCli'],1,0,'R');
            $pdf->cell(23,6, $affiche['QteCli'],1,0,'R');
            $pdf->cell(20,6, $affiche['PaiementCLi'],1,0,'R');
            $pdf->cell(25,6, $affiche['TotalCli'],1,1,'R');            
        
    }
    $pdf->cell(71,6,'',0,0);
    $pdf->cell(25,6,'La total:',0,0);
    $pdf->cell(25,6,$total,0,1,'R');

    $pdf->Output('Panier'.$affiche['id_vis'].'.pdf','D');

}
/*****************************************modifier panier selectioneer***************************************************** */
function modifier_panier_select($bdd){
   
    $_SESSION['idPanier'];
    $panier_modif=$bdd->prepare("SELECT * FROM panier WHERE idPanier=:id_pan");
    $panier_modif->execute(array('id_pan'=>$_SESSION['idPanier']));

    while($avadika=$panier_modif->fetch()){ ?>
        <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
        <form  method="post"  action="controllerAdmin.php">
            <div class="container">
               <input type="hidden"  class="btn btn-success" name="id_p" value=<?php echo $avadika['idPanier'];?> id="">
               <input type="text" class="form-control"  name="isa" value="<?php echo $avadika['QteCli']?>" id=""><br>
               <input type="text" class="form-control"  name="vidy" value="<?php echo $avadika['PaiementCLi']?>" id=""><br>
               <input type="text" class="form-control"  name="date" value="<?php echo $avadika['DateCli']?>" id=""><br>
               <input type="submit" class="btn btn-primary" name="enregistrer_avadika" value="Modifier">
            </div>
        </form><?php}
        if(isset($_POST['enregistrer_avadika'])){
            $mivadika=$bdd->prepare("UPDATE panier SET QteCli=:qty,PaiementCLi=:vola,DateCli=:daty WHERE idPanier=:id ");
            $mivadika->execute(array(
                'qty'=>$_POST['isa'],
                'vola'=>$_POST['vidy'],
                'daty'=>$_POST['date'],
                'id'=>$_POST['id_p']
            ));
            header('location:panier.php');
    }
}
/*****************************************supprimer panier selectionner***************************************************** */

/*****************************************vider panier***************************************************** */

/*****************************************modifier categories***************************************************** */
Function modififier_cat($bdd){
    $modifier=$bdd->prepare("SELECT * FROM categories WHERE id_Cat =:id");
    $modifier->execute(array('id'=>$_POST['id']));
    
   while($modif=$modifier->fetch()){ ?>
   <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
   <form  method="post"  action="controllerAdmin.php">
       <div class="container">
          <input type="hidden"  class="btn btn-success" name="id_vaovao" value=<?php echo $modif['id_Cat'];?> id="">
          <input type="text" class="form-control"  name="nomC" value="<?php echo $modif['categories']?>" id=""><br>
          <input type="file"class="form-control"  name="saryC" value="images/<?php echo $modif['images']?>" id=""><br>

          <input type="submit" class="btn btn-primary" name="enregistrer_vaovao" value="modifier">
       </div>
   </form>
     <?php }
     if(isset($_POST['enregistrer_vaovao'])){
        $requete=$bdd->prepare("UPDATE categories SET categories=:category,images=:img WHERE id_cat=:id ");
        $requete->execute(array(
            'category'=>$_POST['nomC'],
            'img'=>$_POST['saryC'],
            'id'=>$_POST['id_vaovao']
        ));
        header('location:afficher_categorie.php');
     }
}
/*****************************************supprimer categories***************************************************** */
function supprimer_cat($bdd){
    $sup =$bdd->prepare('DELETE FROM categories WHERE id_Cat=:id');  
    $sup->execute(array('id'=>$_POST['id'])); 
 header('location:afficher_categorie.php');      
}
/*****************************************modifier produits***************************************************** */
function modifier_prod($bdd){
   
    $produit=$bdd->prepare("SELECT * FROM produits WHERE id_prod=:idProd");
    $produit->execute(array('idProd'=>$_POST['id']));

    while($miova=$produit->fetch()){ ?>
        <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
        <form  method="post"  action="controllerAdmin.php">
            <div class="container">
               <input type="hidden"  class="btn btn-success" name="id_miova" value=<?php echo $miova['id_prod'];?> id="">
               <input type="file"class="form-control"  name="saryC" value="images/<?php echo $miova['Photos']?>" id=""><br>
               <input type="text" class="form-control"  name="nomP" value="<?php echo $miova['Titre']?>" id=""><br>
               <input type="text" class="form-control"  name="descrip" value="<?php echo $miova['Description']?>" id=""><br>
               <input type="text" class="form-control"  name="category" value="<?php echo $miova['Categorie']?>"><br>
               <input type="text" class="form-control"  name="tail" value="<?php echo $miova['Taille']?>" id=""><br>
               <input type="text" class="form-control"  name="pris" value="<?php echo $miova['Prix']?>" id=""><br>
               <input type="text" class="form-control"  name="stok" value="<?php echo $miova['Stock']?>" id=""><br>
             
               <input type="submit" class="btn btn-primary" name="enregistrer_miova" value="modifier">
            </div>
        </form>
          <?php }
          if(isset($_POST['enregistrer_miova'])){
             $requete=$bdd->prepare("UPDATE produits SET Photos=:img,Titre=:titre,Description=:descrip,Categorie=:cat,Taille=:tall,Prix=:pri,Stock=:stoc WHERE id_prod=:id ");
             $requete->execute(array(
                 'img'=>$_POST['saryC'],
                 'titre'=>$_POST['nomP'],
                 'descrip'=>$_POST['descrip'],
                 'cat'=>$_POST['category'],
                 'tall'=>$_POST['tail'],
                 'pri'=>$_POST['pris'],
                 'stoc'=>$_POST['stok'],
                 'id'=>$_POST['id_miova']
             ));
             header('location:AffichageProduit.php');
          }
}
/*****************************************supprimer produits***************************************************** */
function supprimer_prod($bdd){
    $delete =$bdd->prepare('DELETE FROM produits WHERE id_prod=:id');  
    $delete->execute(array('id'=>$_POST['id'])); 
 header('location:AffichageProduit.php');      
}
/*****************************************supprimer membres***************************************************** */
function supprimer_membre($bdd){
    $deleted =$bdd->prepare('DELETE FROM vi WHERE id_vis=:id');  
    $deleted->execute(array('id'=>$_POST['id'])); 
 header('location:membres.php');      
}

<?php
  include 'modeleAdmin.php';

  $bdd = new PDO ('mysql:host=localhost;dbname=projet_phpZ','root','');
  if(isset($_POST['connecter'])){
    recuperer($bdd);
  }
  if(isset($_POST['manoratra'])){
    Connecter($bdd);
  }
 if(isset($_POST['ajouter_produit'])){
    Ajouter_produit($bdd);
  }
  if(isset($_POST['inscrire'])){
    Ajouter_clients($bdd);
  }
  if(isset($_POST['miconnect'])){
    recupererClients($bdd);
  }
  if(isset($_POST['ajouter_categorie'])){
    Ajouter_categories($bdd);
  }
  if(isset($_POST['panier'])){
    creationPanier($bdd);
}
if(isset($_POST['modifier_cat']) or isset($_POST['enregistrer_vaovao'])){
  modififier_cat($bdd);
}
if(isset($_POST['supprimer_cat'])) {
  supprimer_cat($bdd);
}
if(isset($_POST['modifier_prod']) or isset($_POST['enregistrer_miova'])){
  modifier_prod($bdd);
}
if(isset($_POST['supprimer_prod'])) {
  supprimer_prod($bdd);
}
if(isset($_POST['supprimer_membre'])) {
  supprimer_membre($bdd);
}
if(isset($_POST['Panier_clients'])) {
  afficher_Panier_clients($bdd);
}
if(isset($_POST['pdf_panier'])) {
  pdf_panier_client($bdd);
}
if(isset($_POST['modifier-panier']) or isset($_POST['enregistrer_avadika'])) {
  if(isset($_GET['categories']))
  {  
     $donnees=$bdd->prepare("SELECT * FROM produits WHERE Categorie=:cat");
      $donnees->execute(array('cat'=>$_GET['categories']));
      $affiche=$donnees->fetchAll();
      foreach($affiche as $produit){
  header(location:"panier.php?categories= $produit[id_prod]");
}}
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clients.css">
    <link rel="stylesheet" href="../font/fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Connecter inscription</title>
</head>
<?php include('clientsJS.php'); ?>
<body>
    <div class="container">
        <div class="header">
            <h2>Inscription</h2>
        </div>
        <form class="form" id="form">
          <div class="form-control">
                <label for="photo">Profil</label>
                <input type="file" name="" id="profil">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="nom">Nom</label>
                <input type="text" placeholder="Manohisitraka" name="" id="username">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="prenom">Prenom</label>
                <input type="text" placeholder="Manohisitraka" name="" id="userlastname">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" placeholder="Manohisitraka@gmail.com" name="" id="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="adresse">Adresse</label>
                <input type="text" placeholder="Manohisitraka" name="" id="adress">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="date">Date de naissance</label>
                <input type="date" placeholder="Manohisitraka" name="" id="date">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="mot de passe">Mot de passe</label>
                <input type="text" placeholder="Manohisitraka" name="" id="password">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="motdepase">Confirmation de mot de passe</label>
                <input type="text" placeholder="Manohisitraka" name="" id="password2">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <button type="submit"><i class="fas fa-user-plus">S'inscrire</i></button>
        </form>
    </div>
</body>
</html>
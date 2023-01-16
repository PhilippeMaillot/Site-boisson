<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Ajout produits</title>
</head>
<body>
<div class="Titre">
            <h1>Ajout produits</h1>
        </div> 
<nav class="navbar background">
        <ul class="nav-list">
                <li><a href="Accueil.php">Accueil</a><li>
                <li><a href="list_prod.php">Produits</a><li>
                <li><a href="Formulaire.php">Inscription</a><li>
                <li><a href="connexion.php">Connexion</a><li>
           <?php
            session_start();
            if(isset($_SESSION['user'])){
        ?>
             <li><a href="liste.php">Utilisateurs</a></li>
             <li><a href="produits.php">Ajout prod</a></li>
            <li><a href="deco.php">Deconnexion</a></li>
    <?php } ?>
            </ul>   
        </nav>
<form action="php_produits.php" method="post" enctype="multipart/form-data">
            <p>Marque <input name="marque" type="text"/></p>
            <p>Prix <input name="prix" type="float"/></p>
        <input type="submit" value="Confirmer"/><br/>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> Drinkin shop</title>
        <link rel="stylesheet" href="site.css">
    </head>
    <body>
        <div class="Titre">
            <h1>Connexion</h1>
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
        <form action ="php_conn.php">
            <p>Email <input name="email" type="email"/></p>
            <p>Mot de passe <input name="mdp" type="password"/></p>
        <input type="submit" value="Confirmer"/><br/>
    </form>  
    </body>
</html
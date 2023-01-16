<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> Drinkin shop</title>
        <link rel="stylesheet" href="css_site.css">
        
    </head>
    <body>
        <div class="Titre">
            <h1>Inscription</h1>
        </div>
        <div class="navbar background">
        </div>
           <?php
            session_start();
            if(isset($_SESSION['user'])){
        ?>
            <a href="liste.php">Utilisateurs</a>
            <a href="deco.php">deconnexion</a>
    <?php } ?>
    <nav class="navbar background">
            <ul class="nav-list">
                <a href="Accueil.php">Accueil</a>
                <a href="Formulaire.php">Inscription</a>
                <a href="connexion.php">Connexion</a>
            </ul>   
        </nav> 
    </div>
        <form action="php_site.php" method="get">
            <p>Nom <input name="nom" type="text"/></p>
            <p>Email <input name="email" type="email"/></p>
            <p>Mot de passe <input name="mdp" type="password"/></p>

        <input type="submit" value="Confirmer"/><br/>
    </form>  
    </body>
</html
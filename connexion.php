<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> Drinkin shop</title>
        <link rel="stylesheet" href="css_site.css">
    </head>
    <body>
        <div class="Titre">
            <h1>Connexion</h1>
        </div>
        <?php
            session_start();
            if(isset($_SESSION['user'])){
            
        ?>
        <div class="liens">
            <a href="liste.php">Utilisateurs</a>
    </div>
    <div class="liens2">
            <a href="deco.php">deconnexion</a>
    </div>
    <?php } ?>
        <div class="liens2">
            <a href="Formulaire.php">Inscription</a>
    </div>
        <form action ="php_conn.php">
            <p>Email <input name="email" type="email"/></p>
            <p>Mot de passe <input name="mdp" type="password"/></p>
        <input type="submit" value="Confirmer"/><br/>
    </form>  
    </body>
</html
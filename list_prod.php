<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
<div class="Titre">
            <h1>Produits</h1>
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
        <div class="liste"> 
        <table>
            <thead>
                <tr>
                    <th>
                        Marque
                    </th>
                    <th>
                        Prix
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
$connexion=new mysqli("localhost","root","","Siteboisson");
$requete="SELECT * FROM `produits`";
$result=$connexion->query($requete);
foreach($result as $data){
    ?>
    <tr>
        <td>
           
    <?php echo $data['marque'];
     ?>
     </td>
     <td>
           
    <?php echo $data['prix'];
           ?>
           </td>
           <td>
                    <form action="suppr.php">
                        <input type="hidden" name="id" value="<?=$data['id']?>">
                        <input type="submit" value="supprimer">
                    </form>
            </td>
     </tr>
     <?php
}
?> 
</div>
</body>
</html>
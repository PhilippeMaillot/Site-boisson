<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Drinkin Shop</title>
        <link rel="stylesheet" href="css_site.css">
    </head>
    <body>
    <div class="Titre">
            <h1>Drinkin Shop</h1>
        </div>
        <div class="liens">
    <a href="Formulaire.html">Site de création de boisson</a></div>
        <table>
            <thead>
                <tr>
                    <th>
                        Marque
                    </th>
                    <th>
                        Prix
                    </th>
                    <th>
                        Quantité
                    </th>
                </tr>
            </thead>
            <tbody>
<?php
$connexion=new mysqli("localhost","root","","Siteboisson");

$requete="SELECT * FROM `produit`";
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
           
           <?php echo $data['quantite'];
           ?>
           </td>
     </tr>
     <?php
}
?> 
</tbody>
</table>
</body>
</html>
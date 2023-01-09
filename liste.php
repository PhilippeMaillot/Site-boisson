<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>
                        marque
                    </th>
                    <th>
                        prix
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
     </tr>
     <?php
}
?> 
</tbody>
</table>
</body>
</html>
<?php
 $qte= $_GET['Quantite'];
 $marque= $_GET['Marque'];
 $prix= $_GET['Prix'];
 $connexion=new mysqli("localhost","root","","Siteboisson");

 $requete="INSERT INTO produit(marque, quantite, prix) VALUES ('$marque', $qte, $prix)";
 $result = $connexion->query($requete);
    $connexion->close();
    include('Formulaire.html')
?>

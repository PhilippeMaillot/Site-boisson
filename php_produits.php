<?php
$marque= $_POST['marque'];
$prix= $_POST['prix'];
$connexion=new mysqli("localhost","root","","Siteboisson");

 $requete="INSERT INTO produits(marque, prix) VALUES ('$marque', '$prix')";
 $connexion->query($requete);
    $connexion->close();
    include('produits.php');
?>
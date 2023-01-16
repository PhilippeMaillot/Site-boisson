<?php
 $nom= $_GET['nom'];
 $mail= $_GET['email'];
 $mdp= $_GET['mdp'];

 $connexion=new mysqli("localhost","root","","Siteboisson");

 $requete="INSERT INTO user(nom, email, mdp) VALUES ('$nom', '$mail', '$mdp')";
 $connexion->query($requete);
    $connexion->close();
    include('formulaire.html')
?>

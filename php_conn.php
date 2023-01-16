<?php
 $mail= $_GET['email'];
 $mdp= $_GET['mdp'];

 $connexion=new mysqli("localhost","root","","Siteboisson");

 $requete="SELECT user(email, mdp) VALUES ('$mail', '$mdp')";
 $res = $connexion->query($requete);
$infosUser= mysqli_fetch_assoc($res);
if (isset($email)) {
    echo $ligne['email'];
}
else
{
    echo "La variable $email n'est pas définie";
}
var_dump($infosUser);
echo $ligne['email'];
echo $ligne['mdp'];
die();
?>

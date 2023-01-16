<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $mail= $_GET['email'];
 $mdp= $_GET['mdp'];

 $connexion=new mysqli("localhost","root","","Siteboisson");

 $requete="SELECT * FROM user WHERE email='$mail' AND mdp='$mdp'";
 $res = $connexion->query($requete);
 $infosUser= mysqli_fetch_assoc($res);
 if(isset($infosUser)){
    session_start();
    $_SESSION['user'] = $infosUser;

 header('Location: conn_reussi.php');
   
 }
else{
    echo "Mail ou mot de passe incorrect !";
}
?>
</body>
</html>


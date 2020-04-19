<!DOCTYPE html>
<html>
<head> 
<title>Parc Controleur</title>
</head>
<?php
 session_start();

 try
{
    $connexion = new PDO('mysql:host=localhost;dbname=projet', 'root','' );
}
catch (Exception $e)
{
   echo "Marche pas";
}
  
$login = $_POST["login"];
$mdp = $_POST["motdepasse"]; 


$verifLogin = $connexion->query("SELECT * FROM identifiant WHERE login='$login' AND mdp='$mdp'");
$donnees = $verifLogin->fetch((PDO::FETCH_OBJ));

if($donnees!=NULL)
{
 echo "<br>Accès<br>";
 $_SESSION["login"]="Valide";
 header('Location: Parc-Controleur.php');     
}
else
{
    echo "Il semble qu'il y ait une erreur dans votre mot de passe ou votre login";

}

?>
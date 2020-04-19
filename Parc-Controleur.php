<!DOCTYPE html>
<html>
<head> 
<title>Parc Controleur</title>
</head>

<?php
 session_start();

 echo $_SESSION["login"];

 try
{
    $connexion = new PDO('mysql:host=localhost;dbname=projet', 'root','' );
}
catch (Exception $e)
{
   echo "Marche pas";
}

 include('UpButton.php');

 ?>
 <table border = 1 width =100%>
     <tr>
         <td width =20%>

         </td>
         <td>
            <p align =center>Emplacement</p> 
         </td>
         <td>
            <p align =center>Dernier téléchargement</p> 
         </td>
         <td>
             <p align =center>% d'utilisation</p>
         </td>
         <td>
            <p align =center>Afficher les casiers</p>
         </td>
         <td>
               <p align =center>Modifier les changements</p>
         </td>
         <td>
               <p align =center>Supprimer</p>
         </td>
     </tr>


        <?php 

        $connexion = new PDO('mysql:host=localhost;dbname=projet', 'root','' );      
        $collecteurControleur = $connexion->query("SELECT * FROM Controleur");

        $compteur =0;
         while ($donnees = $collecteurControleur->fetch((PDO::FETCH_OBJ)))
         { ?>  
          <tr>
              <td width = 20%>
                  <p align=center><input type="checkbox" name="<?php echo  $compteur++ ; ?>" /></p> 
                </td> 
                <td>
                <p align= center><?php echo $donnees->emplacement ?></p> 
                </td>        
                <td>
                <p align= center><?php echo $donnees->dernierTelech ?></p>
                </td>
                <td>
                    <p align= center> <?php echo $donnees->nbrCasLibre/$donnees->nbrCasier*100 ; echo "%";?></p>
                </td>  
                <td>
                <form name="accueil" method="post" action="Parc-Controleur.php">
                 <p align=center ><input type="submit" value="Accueil" style="width:100px;height: 50px;"/> </p>   
                 </form> 
                </td>  
                <td>
                <p align= center>-</p>
                </td>  
                 
                <td>
                <form name="accueil" method="post" action="Parc-Controleur.php">
                 <p align=center ><input type="submit" value="Accueil" style="width:100px;height: 50px;"/> </p>   
                 </form> 
                </td>  
         </tr> 
        <?php } ?>  
 </table>
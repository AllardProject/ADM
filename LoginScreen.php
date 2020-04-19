<!DOCTYPE html>
<html>
<head> 
<title>Login</title>
</head>
<?php session_start();


$_SESSION["login"] = FALSE;
?>


<body>
<form name="authentification" method="post" action="TestLogin.php">
    <table width=100% border = 0 cellspacing="0" rawspacing="0">
        <tr >
            <td colspan="2"> <p align="center" style= "font: bold italic 25pt/0pt serif" color=red>  Digicon</p>    </td>        </tr>
        <tr>
            <td width=50%> <p align="right"> Login :</p></td>
            <td> <p align=left > <input type="text"  name="login" /> </p>  </td>
        </tr>
        <tr>
            <td ><p align=right >Mot de passe :</p></td>
            <td > <p align=left >  <input type="password"  name="motdepasse"/> </p>  </td>
        </tr>
        <tr>
            
            <td colspan="2"><p align=center ><input type="submit" value="OK"/> </p>  </td>
        </tr>

    </table>

</form>
<?php
  
?> 
</body>


</html>
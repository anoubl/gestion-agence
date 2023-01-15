<?php
session_start();
require("objet.php");
?>

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM `absence` WHERE id='$id'";
    $resultat=$con->exec($sql);
                  if($resultat)
               {
                rederiger('consulter_absence.php');
               }
                  else 
                 {
                   print_r($con->errorinfo());
                 }
}
?>
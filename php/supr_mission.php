<?php
 session_start();
 require("objet.php");
 $id=$_GET['deleteid'];
$sql="DELETE FROM `missions` WHERE id='$id'";
$resultat=$con->exec($sql);
        if($resultat)
        {
            rederiger('gestion_missions.php');
        }
        else
        {
            print_r($con->errorinfo());
        }

?>
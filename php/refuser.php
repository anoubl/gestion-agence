<?php
 session_start();
 require("objet.php");
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $sql="UPDATE `conger` SET `etat`=0 where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        rederiger('gestion_conge.php');
    }
    else
    {
        print_r($con->errorinfo());
    }
 }
?>
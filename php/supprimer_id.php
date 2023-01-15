<?php
    session_start();
    require("objet.php");
    if(isset($_GET['id']))
    {
    $id=$_GET['id'];
    $sql="DELETE FROM `conger` WHERE id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        rederiger('conger_e.php');
    } 
    else
    {
        print_r($con->errorInfo());
    }
    }
    
 ?>
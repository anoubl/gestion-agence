<?php
session_start();
require("objet.php");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
}
$sql="SELECT * FROM `utilisateur` WHERE email='$email' and password='$pass'";
$resultat=$con->query($sql);
if($resultat->rowcount()>0)
{
$_SESSION['email']= $email;
$rows=$resultat->fetchall();
foreach($rows as $rows)
{
    $role=$rows['role'];
    $_SESSION['role']=$role;
    $_SESSION['matricule']=$rows['matricule'];
    $_SESSION['pass']=$rows['password'];
}
if($role==0)
{
    rederiger('employee.php');
}
else
{
    rederiger('admin.php');
}
}
else
{
    rederiger('index.php');
}
?>
<?php
$db="projet_rh";
$server="localhost";
$user="root";
$pass="";
try
{
    $con=new pdo("mysql:dbname=$db;host=$server",$user,$pass);
}
catch(pdoexception $e)
{
echo "connexion echoué car ".$e->getmessage();
exit();
}
function rederiger($nom)
{
    header("location:$nom");
}
?>
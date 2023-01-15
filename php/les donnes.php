
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
    <style>
        body
        {
            text-align:center;
        }
        table{
margin:auto;
}
    </style>
</head>
<body>
    <h1 class="text-success"><i>Les donnes administratives</i></h1>
    <table class="table table-striped table-success" border="1">
        <tr>
            <th>
                <i>Matricule</i>
            </th>
            <th>
               <i>Prenom</i>
            </th>
            <th>
                <i>Nom</i>
            </th>
            <th>
                <i>Date de naissance</i>
            </th>
            <th>
                <i>Situation</i>
            </th>
            <th>
                <i>Nombre d'enfants</i>
            </th>
            <th>
                <i>Service</i>
            </th>
            <th>
                <i>Salaire</i>
            </th>
        </tr>
<?php
session_start();
require("objet.php");
$role=$_SESSION['role'];
$matricule=$_SESSION['matricule'];
$sql="SELECT * FROM `personnel` where matricule='$matricule'";
$resultat=$con->query($sql);
$rows=$resultat->fetchall();
foreach($rows as $rows)
{
    echo" <tr>";
    echo "<td>";
    echo $rows['matricule'];
    echo "</td>";
    echo "<td>";
    echo $rows['prenoms'];
    echo "</td>";
    echo "<td>";
    echo $rows['noms'];
    echo "</td>";
    echo "<td>";
    echo $rows['dateNaiss'];
    echo "</td>";
    echo "<td>";
    echo $rows['situation'];
    echo "</td>";
    echo "<td>";
    echo $rows['nombre enfant'];
    echo "</td>";
    echo "<td>";
    echo $rows['service'];
    echo "</td>";
    echo "<td>";
    echo $rows['salaire'];
    echo "</td>";
    echo "</tr>";
}
?>
 </table>
 <br>
 <?php
if($role==1)
{
    echo "<a class='btn btn-success'href='admin.php'>Retour à la page d'acueil</a>";
}
else
{
   echo " <a  class='btn btn-success'href='employee.php'>Retour à la page d'acueil</a> ";
}
?>
</body>
</html>


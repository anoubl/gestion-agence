<?php
    session_start();
    require("objet.php");
    $matricule=$_SESSION['matricule'];    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
          body
        {
            text-align:center;
            margin:120px;
        }
        table{
margin:auto;
}
button
        {
            padding: 5px;
            background-color: blue;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-primary" border="1">
        <tr>
            <th>Motif</th>
            <th>Date Début</th>
            <th>Nombre de jours</th>
            <th>Etat</th>
            <th>Suppression</th>
        </tr>
        <?php
        $sql="SELECT * FROM `conger` where matricule='$matricule'";
        $resultat=$con->query($sql);
        $rows=$resultat->fetchall();
        foreach($rows as $rows)
        {
        $id=$rows['id'];
         echo "<tr>";
         echo "<td>";
         echo $rows['motif'];
         echo "</td>";
         echo "<td>";
         echo $rows['date_debut'];
         echo "</td>";
         echo "<td>";
         echo $rows['nombre_jr'];
         echo "</td>";
         echo "<td>";
        if($rows['etat']==-1)
        {
           echo "<p style='color:darkgoldenrod;'>Sans décision</p>";
        } 
        if($rows['etat']==0)
        {
           echo "<p style='color:red;'>Refusé</p>";
        } 
        if($rows['etat']==1)
        {
           echo "<p style='color:green;'>Accepté</p>";
        } 
         echo "</td>";
         echo "<td>";
         if($rows['etat']==-1)
        {
            echo "<a style='color:red;' href='supprimer_id.php?id=$id'>Supprimer</a>";
        }
         echo "</td>";
         echo "</tr>";
        }
        ?>
    </table>
    <br>
 <button class='btn btn-primary' onclick="window.location.href = 'ajouter_conger.php';">Ajouter conge</button>
    <br>
    <br>
 <button class='btn btn-primary' onclick="window.location.href = 'employee.php';">Retour à la page d'accueil</button>
</body>
</html>
<?php
session_start();
require("objet.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
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
<h1 style="text-info"><i>La liste d'absence</i></h1>
    <br>
    <table class="table table-striped table-info" border="1">
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date absence</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
        <?php
        $sql="SELECT prenoms,noms,absence.date,absence.id FROM personnel,absence where personnel.matricule=absence.matricule";
        $resultat=$con->query($sql);
        $rows=$resultat->fetchall();
        foreach($rows as $rows)
        {
            $id=$rows['id'];
            echo "<tr>";
            echo "<td>";
            echo $rows['prenoms'];
            echo "</td>";
            echo "<td>";
            echo $rows['noms'];
            echo "</td>";
            echo "<td>";
            echo $rows['date'];
            echo "</td>";
            echo "<td>";
            echo "<a class='btn btn-success' href='modifier_absence.php ?id=$id' >Modifier</a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='btn btn-danger' href='supprimer_absence.php ?id=$id' >Supprimer</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </table>
        <br>
          <a class="btn btn-info" href="ajouter_absence.php">Ajouter une absence</a>
        <br>
        <br>
 <button  class=" btn btn-info" onclick="window.location.href = 'admin.php';">Retour à la page d'accueil</button>
</body>
</html>
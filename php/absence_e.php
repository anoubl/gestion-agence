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

    </style>
</head>
<body>
    <h1 class="text-dark"><i>Les absences</i></h1>
    <br>
    <table class="table table-striped table-dark" border="1">
    <thead class="thead-light">
        <tr >
            <th>Prenom</th>
            <th>Nom</th>
            <th>Date absence</th>
        </tr>
    </thead>
        <?php
        $sql="SELECT prenoms,noms,absence.date FROM personnel,absence where personnel.matricule=absence.matricule and personnel.matricule='$matricule' ";
        $resultat=$con->query($sql);
        $rows=$resultat->fetchall();
        foreach($rows as $rows)
        {
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
            echo "</tr>";
        }
        ?>
        </table>
        <br>
 <button class="btn btn-dark" onclick="window.location.href = 'employee.php';">Retour à la page d'accueil</button>
</body>
</html>
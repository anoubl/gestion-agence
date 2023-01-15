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
button
        {
            padding: 5px;
            background-color: blue;
        }
    </style>
 </head>
 <body>
    <h1 class="text-warning"><i>Les missions</i></h1>
    <table class="table table-striped table-warning" border="1">
        <tr>
            <th>Libelle</th>
            <th>Date Début</th>
            <th>Date Fin</th>
            <th>Terminer</th>
        </tr>
        <?php
        $sql="SELECT * FROM `missions` WHERE matricule='$matricule'";
        $resultat=$con->query($sql);
        $rows=$resultat->fetchall();
        if($resultat)
        {
            foreach($rows as $rows)
            {
             echo "<tr>";
             echo "<td>";
             echo  $rows['libelle'];
             echo "</td>";
             echo "<td>";
             echo  $rows['date_debut'];
             echo "</td>";
             echo "<td>";
             echo  $rows['date_fin'];
             echo "</td>";
             echo "<td>";
             if($rows['terminer']=="")
             {
                   echo "Vide";
             }
             else
             {
                echo $rows['terminer'];
             }
             echo "</td>";
             echo "</tr>";
            }
        }
        else
        {
            print_r($con->errorInfo());
        }
        ?>
    </table>
    <br>
 <button class="btn btn-warning" onclick="window.location.href = 'employee.php';">Retour à la page d'accueil</button>
 </body>
 </html>
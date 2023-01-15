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
        .col
        {
            color:red;
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
    <h1 class="text-danger">Liste Des Missions</h1>
    <table class="table table-striped table-danger" border="1">
        <tr>
            <th>Employee</th>
            <th>libelle</th>
            <th>Date Début</th>
            <th>Date Fin Prevue</th>
            <th>Date Fin</th>
            <!-- style="color:red;"-->
            <th >Action</th>
        </tr>
        <?php
        $tab=array();
        $n=0;
         $sql="
         select missions.id,concat(personnel.prenoms,' ',personnel.noms) as employee,missions.libelle,missions.date_debut,missions.date_fin,missions.terminer
         FROM personnel,missions
         WHERE personnel.matricule=missions.matricule;";
         $resultat=$con->query($sql);
         if($resultat)
        {
            $rows=$resultat->fetchall();
            foreach($rows as $rows)
         {
            echo "<tr>";
            echo "<td>";
            echo $rows['employee'];
            echo "</td>";
            echo "<td>";
            echo $rows['libelle'];
            echo "</td>";
            echo "<td>";
            echo $rows['date_debut'];
            echo "</td>";
            echo "<td>";
            echo $rows['date_fin'];
            echo "</td>";
            echo "<td>";
            if($rows['terminer']=="")
            {
                 echo "-----";
            }
            else
            {
                echo $rows['terminer'];
            }
            echo "</td>";
            echo "<td>";
            if($rows['terminer']=="")
            {
                $id=$rows['id'];
                // $tab[$n]=$rows['id'];
                // $_SESSION['id']=$tab[$n];
                // $n++;
                echo "<a style='color:green;' href='modif_mission.php ?deleteid=$id' >Modifier</a>";
                echo "<br>";
                echo "<a style='color:red;' href='supr_mission.php ?deleteid=$id' >Supprimer</a>";
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
 <button class="btn btn-danger" onclick="window.location.href = 'admin.php';">Retour à la page d'accueil</button>
 <br>
 <br>
 <button class="btn btn-danger" onclick="window.location.href = 'affecter_mission.php';">Affecter Mission</button>
</body>
</html>
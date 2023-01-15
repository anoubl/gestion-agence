<?php
 session_start();
 require("objet.php");
 $matricule=$_SESSION['matricule']
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
        .mo
        {
            padding: 10px;
            background-color: green;
        }
        .su{
            padding: 10px;
            background-color: red;
        }
    </style>
</head>
<body>
    <h1 style="text-primary">La Liste Des Employees</h1>
    <table class="table table-striped table-primary" border="1">
        <tr>
        <th>Matricule</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>Situation</th>
        <th>Nombre d'enfant</th>
        <th>Service</th>
        <th>Salaire</th>
        <th>Action</th>
        </tr>
        <?php
        $sql="select personnel.id,personnel.service,personnel.matricule,personnel.prenoms,personnel.noms,personnel.dateNaiss,personnel.situation,personnel.salaire,
        personnel.`nombre enfant`,
        utilisateur.role
        from personnel,utilisateur
        where personnel.matricule=utilisateur.matricule and   utilisateur.role!=1;";
             $resultat=$con->query($sql);
             if(!$resultat)
            {
               print_r($con->errorinfo());
            }
             else
             {
                $rows=$resultat->fetchall();
        ?>
        <?php foreach($rows as $rows) {  
             $id=$rows['id']; ?>
             <tr>
          <td><?php echo$rows['matricule'] ; ?></td>
          <td><?php echo$rows['prenoms'] ;  ?></td>
          <td><?php echo$rows['noms']  ; ?></td>
          <td><?php echo$rows['dateNaiss']   ;?></td>
          <td><?php echo$rows['situation']   ;?></td>
          <td><?php echo$rows['nombre enfant']   ;?></td>
          <td><?php echo$rows['service']  ;?></td>
          <td><?php echo$rows['salaire']   ;?></td>
          <td> <?php echo "<a style='color:green;' href='mo_employee.php ?delete=$id' >Modifier</a>"; ?></td>
          <?php }?>
          <?php }?>
         </tr>
    </table>
    <br>
 <button class="btn btn-primary" onclick="window.location.href = 'admin.php';">Retour à la page d'accueil</button>
</body>
</html>
<?php



?>
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">La Liste des congés</h1>
       </header>
   </div>
   <table class="table table-striped table-primary" border="1">
    <tr>
        <th>Matricule</th>
        <th>Prenom et Nom</th>
        <th>Motif</th>
        <th>Date Début</th>
        <th>Nombre De Jours</th>
        <th>Etat</th>
    </tr>
    <?php
      $sql="select personnel.matricule,concat(personnel.prenoms,' ',personnel.noms) as name,conger.id,conger.motif,conger.date_debut,conger.etat,conger.nombre_jr
      FROM personnel,conger
      where personnel.matricule=conger.matricule;";
     $resultat=$con->query($sql);
     if(!$resultat)
     {
        print_r($con->errorinfo());
     }
     else
     {
         $rows=$resultat->fetchall();
         foreach($rows as $rows)
         {
            $id=$rows['id'];
    ?>
       <tr>
        <td><?php echo $rows['matricule'];?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['motif']; ?></td>
        <td><?php echo $rows['date_debut'];?> </td>
        <td> <?php echo $rows['nombre_jr']; ?></td>
        <td> 
           <?php 
           if($rows['etat']==-1)
           {
             ?>
            <a class="btn btn-success" <?php echo "href='accepter.php?id=$id'"; ?>>Accepter</a>
            <a class="btn btn-danger" <?php echo "href='refuser.php?id=$id'"; ?>>Refuser</a>
           <?php
            }
           if($rows['etat']==1)
           {
            ?> 
           <p class="text-primary">Accepter</p>
           <?php }
           if($rows['etat']==0)
           {
            ?> 
             <p class="text-danger">Refuser</p>
          <?php }
         }
        }
           ?>
         </td>
       </tr>
   </table>
   <a class="btn btn-dark" href="admin.php">Retour</a>
</body>
</html>
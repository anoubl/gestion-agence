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
           <h1 class="display-6">Ajouter Un Employee</h1>
       </header>
       <section class="container my-2 bg-dark w-50 text-light p-2">
        <form class="row g-3 p-3"  action="#" method="post">
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Matricule</label>
        <input type="text" class="form-control" name="Matricule" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Prenom</label>
        <input type="text" class="form-control" name="Prenom" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Nom</label>
        <input type="text" class="form-control" name="Nom" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" name="date_ne" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Situation</label>
        <input type="text" class="form-control" name="Situation" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Nombre d'enfants</label>
        <input type="number" class="form-control" name="Nombre" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Service</label>
        <input type="text" class="form-control" name="Service" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Salaire</label>
        <input type="number" class="form-control" name="Salaire" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="" id="">
        </div>
        <div class="col-md-4">
        <label for="inputEmail4" class="form-label">--Choisir Etat--</label>
        <select name="etat" id="">
            <option value="1">Admin</option>
            <option value="0">Employee</option>
        </select>
        </div>
        <div class="col-12" >
        <input  class="form-control" class="clr"type="submit" value="Ajouter" name="submit">
        </div>
        <p id="msg"></p>
        </form>
       </section>
   </div>
   <a class="btn btn-dark" href="admin.php">Retour à la page d'accueil</a>
   <?php
    if(isset($_POST['submit']))
    {
        $matricule=$_POST['Matricule'];
        $prenom=$_POST['Prenom'];
        $nom=$_POST['Nom'];
        $date=$_POST['date_ne'];
        $situation=$_POST['Situation'];
        $nombre=$_POST['Nombre'];
        $service=$_POST['Service'];
        $salaire=$_POST['Salaire'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $role=$_POST['etat'];
            $sql="INSERT INTO `personnel`( `matricule`, `prenoms`, `noms`, `dateNaiss`, `situation`, `nombre enfant`, `service`, `salaire`) VALUES('$matricule','$prenom','$nom','$date','$situation','$nombre','$service','$salaire');INSERT INTO `utilisateur`( `matricule`, `email`, `password`, `role`) VALUES ('$matricule','$email','$password','$role') ;";
            $resultat=$con->exec($sql);
            if(!$resultat )
            {
                print_r($con->errorinfo());
            }
            else
            {
        ?>
             <script>
            document.getElementById('msg').innerHTML="<strong class='text-danger text-center'>Merci!!!</strong>";
            </script>
           <?php
            }
        }
   ?>
</body>
</html>
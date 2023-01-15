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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <style>
 body
        {
            text-align:center;
            margin:120px;
        }
        input{
            margin:5px;
            padding:5px;
        }
    </style>
 </head>
 <body>
 <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Ajouter un congé </h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
   <form  class="row g-3 p-3" action="" method="POST">
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Motif</label>
    <input class="form-control" type="text" name="motif" placeholder="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date Début</label>
    <input class="form-control" type="date" name="date_debut" placeholder="" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nombre de jours</label>
    <input class="form-control" type="number" name="nombre" placeholder="" id="">
    </div>
        <div class="col-12">
    <input  class="form-control" class="clr" type="submit" value="Ajouter" name="submit"> 
       </div>
        <br>
        <p id="mesg"></p>
    </form>
   </section>    
    <?php
     if(isset($_POST['submit']))
     {
        $motif=$_POST['motif'];
        $date=$_POST['date_debut'];
        $nombre=$_POST['nombre'];
        $sql="INSERT INTO `conger`(`id`, `matricule`, `motif`, `date_debut`, `nombre_jr`) VALUES (null,'$matricule','$motif','$date','$nombre')";
        $resultat=$con->exec($sql);
        if($resultat)
        {
            echo "
            <script>
            document.getElementById('mesg').innerHTML='Merci!!!';
            </script>
            ";
        }
        else
        {
            print_r($con->errorInfo());
        }
    }
    ?>
     <button class="btn btn-dark" onclick="window.location.href = 'conger_e.php';">Retour</button>
 </body>
 </html>
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
   <style>
     body
        {
            text-align:center;
            margin:120px;
        }
        input{
            margin:5px;
        }
   </style>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Modifier Les Information D'une Mission </h1>
       </header>
   </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3" action="#" method="post">
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Libelle:</label>
    <input  class="form-control" type="text" name="lbl">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date Début</label>
    <input  class="form-control" type="date" name="dated" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date Fin:</label>
    <input  class="form-control" type="date" name="datef" id="">
    </div>
    <div class="col-md-4">
    <label  for="inputEmail4" class="form-label">Date Terminer </label>
    <input  class="form-control" type="date" name="datet" id="">
    </div>
    <div class="col-12">
    <input  class="form-control" class="clr" type="submit" value="Modifier" name="submit"> 
            </div>
    </form>
    </section>
    <br>
 <button  class="btn btn-dark" onclick="window.location.href = 'gestion_missions.php';">Retour</button>
</body>
</html>
<?php
if(isset($_POST['submit']) && isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    if(!empty($_POST['lbl']))
    {
        $libelee=$_POST['lbl'];
        $sql="UPDATE `missions` SET `libelle`='$libelee' where id='$id'" ;
        $resultat=$con->exec($sql);
        if($resultat)
        {
          echo "data update succesfully";
        }
        else
        {
            print_r($con->errorinfo());
        }
    }
    if(!empty($_POST['dated']))
    {
        $date_debut=$_POST['dated'];
        $sql="UPDATE `missions` SET `date_debut`='$date_debut' where id='$id'" ;
        $resultat=$con->exec($sql);
        if($resultat)
        {
          echo "data update succesfully";
        }
        else
        {
            print_r($con->errorinfo());
        }
    }
    if(!empty($_POST['datef']))
    {
        $date_fin=$_POST['datef'];
        $sql="UPDATE `missions` SET `date_fin`='$date_fin' where id='$id'" ;
        $resultat=$con->exec($sql);
        if($resultat)
        {
          echo "data update succesfully";
        }
        else
        {
            print_r($con->errorinfo());
        }
    }
    if(!empty($_POST['datet']))
    {
        $datet=$_POST['datet'];
        $sql="UPDATE `missions` SET `terminer`='$datet' where id='$id'" ;
        $resultat=$con->exec($sql);
        if($resultat)
        {
          echo "data update succesfully";
        }
        else
        {
            print_r($con->errorinfo());
        }
    }
}
?>
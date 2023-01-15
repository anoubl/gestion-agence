<?php
session_start();
require("objet.php");
$x=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
    <style>
    body
    {
      text-align: center;
      margin:120px;
    }
    input
        {
            padding: 5px;
            margin:5px;
        }
        h1
        {
            color:red;
        }
  </style>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Modifier Les Informations d'un Employee </h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
   <form   class="row g-3 p-3" action="#" method="POST">
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Prenom</label>
    <input class="form-control"  type="text" placeholder="" name="prenom">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input class="form-control"  type="text"  name="nom"> 
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date Naissance</label>
    <input class="form-control"  type="date" placeholder="" name="daten" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">situation</label>
    <input class="form-control"  type="text" placeholder="situation" name="situa">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nombre d'enfant</label>
    <input class="form-control"  type="number" name="nombre" placeholder="Nombre d'enfant" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">salaire</label>
    <input class="form-control"  type="number" name="salaire" placeholder="" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">service</label>
    <input class="form-control"  type="text" placeholder="Service" name="service">
    </div>
    <div  class="col-12">
    <input type="submit" value="Modifier" name="submit">
    </div>
        </form>
   </section>
   <br>
   <p style="color:red;" id="msg"></p>
        <br>
        <button  class="btn btn-dark"onclick="window.location.href = 'consulter_employee.php';">Retour</button>
        <?php
if(isset($_POST['submit']) && isset($_GET['delete']) )
{
   
$id=$_GET['delete'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$daten=$_POST['daten'];
$situation=$_POST['situa'];
$nombre=$_POST['nombre'];
$salaire=$_POST['salaire'];
$service=$_POST['service'];
if(!empty($prenom))
{
$sql="UPDATE `personnel` SET prenoms='$prenom' where id='$id'";
$resultat=$con->exec($sql);
if($resultat)
{
    $x=true;
}
else
{
    echo "<pre>";
    print_r($con->errorinfo());
    echo "</pre>";
}
}
if(!empty($nom))
{
    $x=true;
    $sql="UPDATE `personnel` SET noms='$nom' where id='$id' ";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }
}
if(!empty($daten))
{
    $x=true;
    $sql="UPDATE `personnel` SET dateNaiss='$daten' where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }
}
if(!empty($situation))
{
    $x=true;
    $sql="UPDATE `personnel` SET situation='$situation' where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }
}
if(!empty($nombre))
{
    $x=true;
    $sql="UPDATE `personnel` SET `nombre enfant`='$nombre' where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }}
if(!empty($salaire))
{
    $x=true;
    $sql="UPDATE `personnel` SET salaire='$salaire' where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }
}
if(!empty($service))
{
    $x=true;
    $sql="UPDATE `personnel` SET `service`='$service' where id='$id'";
    $resultat=$con->exec($sql);
    if($resultat)
    {
        $x=true;
    }
    else
    {
        print_r($con->errorinfo());
    }
}
}
?>
<script>
    <?php 
       if($x==true)
       {
    ?>
    document.getElementById('msg').innerHTML="Merci";
    <?php 
       }
    ?>
</script>
</body>
</html>

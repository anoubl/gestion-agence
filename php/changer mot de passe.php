<?php
session_start();
require("objet.php");
$matricule=$_SESSION['matricule'];
$pass= $_SESSION['pass'];
$role=$_SESSION['role'];
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
      text-align: center;
      margin:120px;
    }
    input
        {
            padding: 5px;
            margin:5px;
        }
  </style>
</head>
<body>
<div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Changer le mot de passe </h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
   <form   class="row g-3 p-3" action="#" method="POST">
   <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Ancien mot de passe*</label>
    <input class="form-control" type="password" name="pas1"  placeholder="" id="">
    </div>
    <br>
    <br>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Nouveau mot de passe*</label>
    <input class="form-control" type="password" name="pas2" placeholder="" id="">
    </div>
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Confirmation mot de passe*</label>
    <input class="form-control" type="password" name="pas3"  placeholder="" id="">
    </div>
    <div class="col-12">
    <input  class="form-control" class="clr" type="submit" value="Modifier" name="submit"> 
            </div>
            
            <p style="color:red;"id="message"></p>
  </form>
   </section>
   <?php
if($role==1)
{
    echo "    <a class='btn btn-dark' href='admin.php'>Retour à la page d'acueil</a>   ";
}
else
{
   echo "     <a  class='btn btn-dark' href='employee.php'>Retour à la page d'acueil</a> ";
}
?>
  
<?php
if(isset($_POST['submit']))
{
  $mot1=$_POST['pas1'];
  $mot2=$_POST['pas2'];
  $mot3=$_POST['pas3'];
 if($mot1==$pass && $mot2==$mot3)
{
  $sql="UPDATE `utilisateur` SET `password`='$mot2' where matricule='$matricule'";
  $resultat=$con->exec($sql);
  if($resultat)
  {
    $_SESSION['pass']=$mot2;
    echo "
    <script>
    document.getElementById('message').innerHTML='votre mot de passe est modifier!!!';
    </script>
    ";
  }
  else
  {
    $var=$con->errorinfo()[20];
    echo "
    <script>
    document.getElementById('message').innerHTML='$var';
    </script>
    ";
  }
}
else
{
  echo "
    <script>
    document.getElementById('message').innerHTML='vérefier votre mot de passe';
    </script>
    ";
}
}
?>
</body>
</html>
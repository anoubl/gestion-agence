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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
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
           <h1 class="display-6">Modifier Une Absence </h1>
       </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3" action="#" method="post">
    <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Date Absence</label>
    <input  class="form-control"type="date" name="date_absence" placeholder="" id="">
    </div>
    <div class="col-12">
    <input  class="form-control" class="clr" type="submit" value="Modifier" name="submit"> 
            </div>
     <p id="msg" style="color:red;"></p>
   </form>
    </section>
   <br>
        <button  class="btn btn-dark" onclick="window.location.href = 'consulter_absence.php';">Retour</button>
    <?php
        if(isset($_POST['submit']) && isset($_GET['id']))
        {
            $id=$_GET['id'];
            $date=$_POST['date_absence'];
            if(!empty($date))
            {
                $sql="UPDATE `absence` SET `date`='$date' where id='$id'";
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
            else
            {
                echo "le champs date est vide";
            }
        }
     ?>
     <script>
        <?php if($x==true)
        {
            ?>
             document.getElementById('msg').innerHTML="Merci";
      <?php  }?>
     </script>
</body>
</html>
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
           <h1 class="display-6">Ajouter Une Absence</h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
   <form class="row g-3 p-3" action="#" method="post">
   <div class="col-md-4">
   <label for="inputEmail4" class="form-label">Employee</label>
    <select name="employee" id="">
        <option value="">--choisir employee--</option>
        <?php $sql="SELECT matricule,concat(prenoms,' ',noms) as noms FROM `personnel`;";
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
                $var=$rows['matricule'];
         ?>
        <option <?php echo "value='$var'"; ?>><?php  echo $rows['noms'];   ?></option>
        <?php  }?>
        <?php  }?>
    </select>
</div>
<div class="col-md-4">
<label for="inputEmail4" class="form-label">Date Absence</label>
    <input type="date" class="form-control" name="date_absence" placeholder="" id="">
</div>
<div class="col-12" >
<input  class="form-control" class="clr"type="submit" value="Ajouter" name="submit">
</div>
  </form>
   </section>
  <br>
  <p id="msg"></p>
  <br>
  <br>
 <button class="btn-dark" onclick="window.location.href = 'consulter_absence.php';">Retour</button>
<?php
if(isset($_POST['submit']))
{
    $option=$_POST['employee'];
    $date=$_POST['date_absence'];
    if(!empty($option) && !empty($date))
    {
        $sql="INSERT INTO `absence`( `matricule`, `date`) VALUES('$option','$date')";
        $resultat=$con->exec($sql);
        if($resultat)
        {
          ?> 
          <script>
                         document.getElementById('msg').innerHTML="Merci";
          </script>
     <?php   
    }
        else
        {
            print_r($con->errorinfo());
        }
    }
}
?>
</body>
</html>
<?php

?>
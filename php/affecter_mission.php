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
        table{
margin:auto;
}
.select{
    text-align:center;
}
.clr
{
    background-color:blue;
}
button
        {
            padding: 5px;
            background-color: blue;
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
           <h1 class="display-6">Affecter Des Missions </h1>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
   <form class="row g-3 p-3"  action="#" method="POST">
   <div class="col-md-4">
   <div class="select">
    <label  for="inputEmail4" class="form-label">Employee:</label>
    <select  class="form-control" name="nome" id="">
        <option value="">--choisir employee--</option>
    <?php
       $sql="SELECT matricule,concat(prenoms,' ',noms) as noms FROM `personnel`;";
       $resultat=$con->query($sql);
       if($resultat)
       {
        $rows=$resultat->fetchall();
        foreach($rows as $rows)
        {
            $var=$rows['matricule'];
            echo "<option value=$var>";
            echo $rows['noms'];
            echo "</option>";
        }
       }
       else
       {
        print_r($con->errorInfo());
       }
    ?>
</select>
    </div>
    </div>
    <div class="col-md-4">
    <label  for="inputEmail4" class="form-label"> Libelle </label>
    <input  class="form-control" type="text" name="lbl">
    </div>
    <div class="col-md-4">
    <label  for="inputEmail4" class="form-label">Date Début </label>
    <input  class="form-control" type="date" name="dated" id="">
    </div>
    <div class="col-md-4">
    <label  for="inputEmail4" class="form-label">Date Fin </label>
    <input  class="form-control" type="date" name="datef" id="">
    </div>
    <div class="col-12">
    <input class="form-control" class="clr" type="submit" value="Affecter" name="submit"> 
            </div>
</form>
   </section>
   
<p id="msg"></p>
<br>
<button class="btn btn-dark" onclick="window.location.href = 'gestion_missions.php';">Retour</button>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $libelee=$_POST['lbl'];
    $matricule=$_POST['nome'];
    $date_debut=$_POST['dated'];
    $date_fin=$_POST['datef'];
    $sql=" INSERT INTO `missions`(`matricule`, `libelle`, `date_debut`, `date_fin`) VALUES('$matricule','$libelee','$date_debut','$date_fin')";
    $resultat=$con->exec($sql);
    if($resultat)
    {
    echo "<script>
    document.getElementById('msg').innerHTML='Merci!!!';
    </script>";
    }
    else
    {
        print_r($con->errorInfo());
    }
}
?>
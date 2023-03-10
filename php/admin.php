<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style2.css">
    <script src="bojs.js"></script>
    <title>Document</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="maroc.jpg" alt="" srcset="">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Gestion
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="gestion_missions.php">Gestion Des Missions</a></li>
          <li><a class="dropdown-item" href="ajouter_employee.php">Ajouter Un Employee</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Consultation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="consulter_employee.php">Consulter Les Employees</a></li>
            <li><a class="dropdown-item" href="consulter_absence.php">Consulter Les Absences</a></li>
            <li><a class="dropdown-item" href="gestion_conge.php">Consulter Les Cong??s</a></li>
            <li><a class="dropdown-item" href="gestion_conge.php"></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Mon profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="les donnes.php">Mes donn??es personnelles administratives</a></li>
            <li><a class="dropdown-item" href="changer mot de passe.php">Changer mot de passe</a></li>
            <li><a class="dropdown-item" href="deconnexion.php">Je me d??connecte</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
<div class="container">
		<article>
      <h1><i>About Us</i></h1>
      <p>Itissalat Al-Maghrib (IAM), ??galement appel?? Maroc Telecom, est une soci??t?? anonyme ?? Directoire et ?? Conseil de Surveillance. N?? en 1998, ?? l???issue de la scission de l???Office National des Postes et T??l??communications (ONPT), Maroc Telecom est l???op??rateur historique et, ?? ce jour, le premier op??rateur global des t??l??communications au Maroc.</p>
    <p>Maroc Telecom est organis?? en Directions G??n??rales autour de ses m??tiers et services. A ces structures s???ajoutent les directions charg??es des Ressources humaines, du D??veloppement ?? l???international, de la Veille et du suivi  strat??gique des filiales, de la Communication, Sponsoring et Ev??nementiel, de la Qualit?? et S??curit?? de l???information et du Contr??le g??n??ral <a style="color:blue;"  target="_blank"href="https://www.iam.ma/groupe-maroc-telecom/nous-connaitre/gouvernance-et-dates-cles/gouvernement-d-entreprise/organigramme.aspx"> (voir organigramme). </a></p>
    <p>Maroc Telecom assure une pr??sence sur l???ensemble du territoire National au travers d???une organisation d??centralis??e qui compte huit Directions R??gionales ?? Rabat, Casablanca, Marrakech, Agadir, Settat, F??s, Tanger et Oujda et qui garantit r??activit?? et proximit?? aupr??s de ses clients et de ses partenaires.</p>
    <p>Pour la distribution de ses produits et services, Maroc Telecom s???appuie sur un large r??seau de distribution compos?? d???un r??seau direct de pr??s de 440 agences commerciales et d???un r??seau indirect comprenant plus de 80 000 revendeurs.</p>
  </article>
	</div>
  
</body>
</html>
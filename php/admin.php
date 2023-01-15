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
            <li><a class="dropdown-item" href="gestion_conge.php">Consulter Les Congés</a></li>
            <li><a class="dropdown-item" href="gestion_conge.php"></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Mon profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="les donnes.php">Mes données personnelles administratives</a></li>
            <li><a class="dropdown-item" href="changer mot de passe.php">Changer mot de passe</a></li>
            <li><a class="dropdown-item" href="deconnexion.php">Je me déconnecte</a></li>
          </ul>
        </li>
    </div>
  </div>
</nav>
<div class="container">
		<article>
      <h1><i>About Us</i></h1>
      <p>Itissalat Al-Maghrib (IAM), également appelé Maroc Telecom, est une société anonyme à Directoire et à Conseil de Surveillance. Né en 1998, à l’issue de la scission de l’Office National des Postes et Télécommunications (ONPT), Maroc Telecom est l’opérateur historique et, à ce jour, le premier opérateur global des télécommunications au Maroc.</p>
    <p>Maroc Telecom est organisé en Directions Générales autour de ses métiers et services. A ces structures s’ajoutent les directions chargées des Ressources humaines, du Développement à l’international, de la Veille et du suivi  stratégique des filiales, de la Communication, Sponsoring et Evénementiel, de la Qualité et Sécurité de l’information et du Contrôle général <a style="color:blue;"  target="_blank"href="https://www.iam.ma/groupe-maroc-telecom/nous-connaitre/gouvernance-et-dates-cles/gouvernement-d-entreprise/organigramme.aspx"> (voir organigramme). </a></p>
    <p>Maroc Telecom assure une présence sur l’ensemble du territoire National au travers d’une organisation décentralisée qui compte huit Directions Régionales à Rabat, Casablanca, Marrakech, Agadir, Settat, Fès, Tanger et Oujda et qui garantit réactivité et proximité auprès de ses clients et de ses partenaires.</p>
    <p>Pour la distribution de ses produits et services, Maroc Telecom s’appuie sur un large réseau de distribution composé d’un réseau direct de près de 440 agences commerciales et d’un réseau indirect comprenant plus de 80 000 revendeurs.</p>
  </article>
	</div>
  
</body>
</html>
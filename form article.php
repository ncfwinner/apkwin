<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ApKWin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="refresh" content=""/>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style form article.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="menu.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>ApKWin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        </li><!-- End Notification Nav -->

       

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/winner.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">NCF Winner</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nzountap Winner</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="portfo/portfolio.php">
                <i class="bi bi-person"></i>
                <span>Mon profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Paramètre</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>informations</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexion</span>
              </a>
            </li>


          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="menu.php">
         
          <span class="ri-database-2-fill">Gestion Commercial</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-article-line"></i><span class="ci">Gestion des articles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="form article.php">
              <i class="bi bi-circle"></i><span>Créer un article</span>
            </a>
          </li>

          <li>
            <a href="form achat.php">
              <i class="bi bi-circle"></i><span>Achats</span>
            </a>
          </li>

          <li>
            <a href="affich form article.php">
              <i class="bi bi-circle"></i><span>Liste des articles</span>
            </a>
          </li>

          
          <li>
            <a href="affich form achat.php">
              <i class="bi bi-circle"></i><span>Liste des achats</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Forms Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion des ventes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="form vente.php">
              <i class="bi bi-circle"></i><span>ventes</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Liste des ventes</span>
            </a>
          </li>
         
          
        </ul>
      </li><!-- End Components Nav -->



      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion de Stock</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Stock Actuelle</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-money-euro-box-line"></i><span>Caisse</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>OUVERTUR DE CAISE</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->

       
      
      <li class="nav-item">
        <a class="nav-link collapsed " href="index.php">
         
          <span class="ri-logout-box-line">Déconnexion</span>
        </a>
      </li><!-- bouton de deconnexion -->


      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>ApKWin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="menu.php">Home</a></li>
          <li class="breadcrumb-item active">Accueil</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    
    <br>
    
    <h1>Gestion des Articles /créer un article</h3></h1>
    <form class="form-art" method="POST">
    
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Référence</label><br>
                  <div class="col-sm-10">
                    <input type="text" class="form-ref" name="reference" placeholder="X">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Désignation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="designation" id="designation" required>
                  </div>
                </div>

               

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date">
                  </div>
                </div>

                 <button type="submit" name="login" class="bt-envoyer">Enregistrer</button>
                 <button type="reset" name="reset" class="bt-annuler">Annuler</button>
                 </form> <br><br>






  <!-- ======= Footer ======= -->
  <footer id="footer" >
    <div class="copyright">
      &copy; Application de <strong><span>Gestion</span></strong>. 
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="portfo/portfolio.php">NCF Winner</a>
    </div>
  </footer><!-- End Footer -->
</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php

//Vérifiersi le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 // Récupérer les données du formulaire
 $reference= $_POST['reference'];
    $designation= $_POST['designation'];
    $date= $_POST['date'];

 // Générer une reference automatique
 function genererReference() {
  $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $chiffres = '0123456789';
  
  // Générer une chaîne aléatoire de 3 lettres majuscules
  $lettreAleatoire = $alphabet[rand(0, strlen($alphabet) - 1)] . $alphabet[rand(0, strlen($alphabet) - 1)] . $alphabet[rand(0, strlen($alphabet) - 1)];
  
  // Générer un nombre aléatoire de 3 chiffres
  $chiffreAleatoire = '';
  for ($i = 0; $i < 3; $i++) {
      $chiffreAleatoire .= $chiffres[rand(0, strlen($chiffres) - 1)];
  }
  
  // Concaténer la lettre et le nombre aléatoires pour former la référence
  $reference = $lettreAleatoire . $chiffreAleatoire;
  
  return $reference;
}

// Exemple d'utilisation
$reference = genererReference();



 // Inclure le fichier de connexion à la base de données
 require_once 'connect.php';
 

//Préparer la requête SQL
$sql = "insert into articles(reference,designation,date) values('$reference', '$designation','$date')";

 // Ex écuter la requête
 if ($conn->query($sql ) === TRUE) {
 echo "<button style='background-color: chartreuse'> Article enregistré avec succès </button>";
 
 echo '<script>
            setTimeout(function(){
                window.location.href = window.location.pathname + "?submitted=true";
            }, 2000); // 2000 millisecondes = 2 secondes
          </script>';

 }
  else {
 echo " Erreur lors de l'ajout de l'enregistrement: " .$conn->error;
 
}

 

} 

?>


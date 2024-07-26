<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ApKWin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="assets/css/style menu.css" rel="stylesheet">

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
        <a class="nav-link collapsed " href="index.php">
         
          <span class="ri-logout-box-line">Déconnexion</span>
        </a>
      </li><!-- bouton de deconnexion -->


      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="menu.php">Home</a></li>
          <li class="breadcrumb-item active">Accueil</li>
        </ol>
      </nav>

    <div class="pagetitle">
     


      <div class="container">
        
        <button class="btn btn-primary my-5">
            <a href="menu.php" class="text-light">Retour</a>
        </button> 

       <h2> Liste des achats</h1>
        
        <div class="container"> 
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Désignation</th>
                        <th scope="col">Prix de d'achat</th>
                        <th scope="col">Prix de de vente</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Montant</th>
                        


                    </tr>
                </thead>
               
 </div><!-- End Page Title -->
    
    <br><br><br><br>
</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php  
          include "connect.php" ;
           $sql='select * from achat';
           $resultat= mysqli_query($conn, $sql);
           if ($resultat) {
               while ($row  = mysqli_fetch_assoc($resultat)) {
                   $id = $row['id'];
                   $designation = $row['designation'];
                   $prix_achat= $row['prix_achat'];
                   $prix_vente = $row['prix_vente'];
                   $quantite= $row['quantite'];
                   $montant = $row['montant'];

                 
                   echo '<tr>
                   <th scope="row">'.$id.'</th>
                   <td>'.$designation.'</td>
                   <td>'.$prix_achat.'</td>
                   <td>'.$prix_vente.'</td>
                   <td>'.$quantite.'</td>
                   <td>'.$montant.'</td>
                  
                 
                   <td>
               <button class="btn btn-primary"><a href="modifier form achat.php?modifier='.$id.'" class="text-light">Modifier</a></button>
               <button class="btn btn-danger"><a href="supprimer form achat.php?supprimeid='.$id.'" class="text-light">Supprimer</a></button>
           </td>
                   </tr>';
               }
           }
           
           
           ?>



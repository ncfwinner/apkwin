
<!-- code php de modification -->
<?php
include 'connect.php';
$id = $_GET['modifier'];
$sql="select * from achat where id=$id";
$resultat= mysqli_query($conn, $sql);
$row  = mysqli_fetch_assoc($resultat);
$id = $row['id'];
$designation = $row['designation'];
$prix_achat= $row['prix_achat'];
$prix_vente = $row['prix_vente'];
 $quantite= $row['quantite'];
 $montant= $row['montant'];

if (isset($_POST['modifier'])) {
    $designation= $_POST['designation'];
    $prix_achat= $_POST['prix_achat'];
    $prix_vente= $_POST['prix_vente'];
    $quantite= $_POST['quantite'];
    $montant= $_POST['montant'];
     $sql = "update achat set id=$id, designation = '$designation', prix_achat='$prix_achat', prix_vente='$prix_vente', quantite='$quantite',montant='$montant' where id=$id";
    $resultat=mysqli_query($conn, $sql);
    if ($resultat) {
        echo "<button style='background-color: chartreuse'> Article enregistré avec succès </button>";
       //  header... c'est pour une renvoies à la page 
        header("location:affich form achat.php");
         
        
     }
     else{
         die(mysqli_error($conn));
     }
 }
?>



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
  <link href="assets/css/style form achat.css" rel="stylesheet">

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
    
    
    <br><br>
    
    <h1>Modification ACHAT</h3></h1>
    <form class="form-art" method="POST">


                  
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">désignation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="designation" value="<?php echo " $designation"?>" required>
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Prix d'achat</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="prix_achat" value="<?php echo " $prix_achat"?>" id="prix_achat" required>
                  </div>
                </div>

               
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Prix de vente</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="prix_vente" value="<?php echo " $prix_vente"?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Quantité</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="quantite" value="<?php echo " $quantite"?>" id="quantite" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">montant</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="montant" value="<?php echo " $montant"?>" id="montant" placeholder="/" required>
                  </div>
                </div>


                 <button type="submit" name="modifier" class="bt-envoyer">Enregistrer</button>
                 <button type="reset" name="reset" class="bt-annuler">Annuler</button>
                 </form> <br>






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



<!-- code jvs qui multiplie automatique les fonformation du champ p-achat et quantite -->
  <script>
// Sélectionner les champs "prix d'achat", "quantité" et "montant"
var prixAchatInput = document.getElementById("prix_achat");
var quantiteInput = document.getElementById("quantite");
var montantInput = document.getElementById("montant");

// Écouter les événements de saisie dans les champs "prix d'achat" et "quantité"
prixAchatInput.addEventListener("input", updateMontant);
quantiteInput.addEventListener("input", updateMontant);

// Fonction pour mettre à jour le champ "montant" en multipliant le prix d'achat et la quantité
  function updateMontant() {
      var prixAchat = parseFloat(prixAchatInput.value);
      var quantite = parseInt(quantiteInput.value);
      // Vérifier si les valeurs saisies sont des nombres valides
      if (!isNaN(prixAchat) && !isNaN(quantite)) {
          var montant = prixAchat * quantite;
          montantInput.value = montant.toFixed(2); // Assure que le montant est affiché avec deux décimales
      } else {
          montantInput.value = ""; // Efface le champ "montant" si les valeurs saisies ne sont pas valides
      }
  }
  
  



</script>


<script>
        // Ajouter un écouteur d'événement au bouton de suppression
        document.getElementById("boutonmodifier").addEventListener("click", function() {
            // Rediriger vers la page d'affichage après la suppression
            window.location.href = "affich form achat.php"; // Remplacez "page_affichage.html" par le chemin de votre page d'affichage
        });
    </script>


</body>

</html>


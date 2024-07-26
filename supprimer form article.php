<?php  
include 'connect.php';
if (isset($_GET['supprimeid'])) {
   $id = $_GET['supprimeid'];
   $sql= "delete from articles where id =$id";
   $resultat = mysqli_query($conn, $sql);
   if ($resultat) {
      
      header("location:affich form article.php");
   }
}


?>
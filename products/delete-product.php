<?php
 // add to this page and cant delete products in cart 
//if(!isset($_SERVER['HTTPS_REFERER'])){
    //REDERECT THEM TO YOUR DESIRED LOCATION
   // header('location: http://localhost:8080/project01/Freshcery/index.php');
  // exit;
//}
?>
<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>


<?php  

   if(!isset($_SESSION['username'])) {
            
        echo "<script> window.location.href='".APPURL."'; </script>";

    }

        if(isset($_POST['delete'])) {
            
            $id = $_POST['id'];
        
            $delete = $conn->prepare("DELETE FROM cart WHERE id='$id'");
            $delete->execute();


        }


?>



<?php require "../includes/footer.php"; ?>
<?
if(!isset($_SERVER['HTTPS_REFERER'])){
    //REDERECT THEM TO YOUR DESIRED LOCATION
    header('location: http://niallmoore.ie/Freshcery/index.php');
   exit;
}
?>
<?php require "../includes/header.php"; ?>
<?php require "../config/config.php";  ?>

<?php  

    if(!isset($_SESSION['username'])) {
        
    echo "<script> window.location.href='".APPURL."'; </script>";

    }


    if(isset($_POST['update'])) {
        
        $id = $_POST['id'];
        $pro_qty = $_POST['pro_qty'];
        $subtotal = $_POST['subtotal'];

        $update = $conn->prepare("UPDATE cart SET pro_qty = '$pro_qty', pro_subtotal = '$subtotal'
        WHERE id='$id'");
        $update->execute();


    }


?>


<?php require "includes/footer.php" ;?>
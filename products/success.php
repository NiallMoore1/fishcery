<?php
// add to this page and wont get seccess message after processing payment 
//if(!isset($_SERVER['HTTPS_REFERER'])){
    //REDERECT THEM TO YOUR DESIRED LOCATION
  //  header('location: http://localhost:8080/project01/Freshcery/index.php');
  // exit;
//}
?>
<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php

        if(!isset($_SESSION['username'])) {
                
            echo "<script> window.location.href='".APPURL."'; </script>";

        }


        if(isset($_SESSION['user_id'])) {
            $delete = $conn->prepare("DELETE FROM cart WHERE user_id='$_SESSION[user_id]'");
            $delete->execute();

        }

?>
<div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Payment has been a success 
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                    <a href="<?php echo APPURL; ?>" class="btn btn-primary text-uppercase">home</a>

                  
                </div>
            </div>
</div>

<?php require "../includes/footer.php"; ?>
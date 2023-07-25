<?php
//if(!isset($_SERVER['HTTPS_REFERER'])){
    //REDERECT THEM TO YOUR DESIRED LOCATION
   // header('location: http://localhost:8080/project01/Freshcery/index.php');
 //  exit;
//}
?>
<?php require "../includes/header.php"; ?>
<?php
    if(!isset($_SESSION['username'])) {
        
        echo "<script> window.location.href='".APPURL."'; </script>";
    
    }
?>


    

        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Pay With Paypal Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                     <!-- Replace "test" with your own sandbox Business account app client ID -->
                     <script src="https://www.paypal.com/sdk/js?client-id=AeaM-TzNP8sbsTzXPG_DwpQxhx1q__0g-k1b6WU28sDLaIPoo7DbPUsySs2MhohrOJz9MfiMTtSuSvz6&currency=USD"></script>
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                            // Sets up the transaction when a payment button is clicked
                            createOrder: (data, actions) => {
                                return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                    value: '<?php echo $_SESSION['total_price']; ?>' // Can also reference a variable or function
                                    }
                                }]
                                });
                            },
                                // Finalize the transaction after payer approval
                                onApprove: (data, actions) => {
                                    return actions.order.capture().then(function(orderData) {
                                
                                    window.location.href='success.php';
                                    });
                                }
                                }).render('#paypal-button-container');
                    </script>
                </div>
            </div>
        </div>

                   
                  
        <?php require "../includes/footer.php" ;?>


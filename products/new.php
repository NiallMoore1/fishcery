http://localhost:8080/project01/freshcery/products/detail-product.php?id=1

http://localhost:8080/project01/freshcery/products/detail-product.php

<section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Most Wanted</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allmostProducts as $allmostProduct) : ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>

                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?php echo $allmostProduct->exp_date; ?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $allmostProduct->image; ?>" alt="Card image 2" class="card-img-top">
                                    </div>

                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.php"><?php echo $allmostProduct->title; ?></a>
                                        </h4>
                                        <div class="card-price">
                                           <!-- <span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">€<?php echo $allmostProduct->price; ?></span>
                                        </div>
                                        <a href="detail-product.php" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section id="meats">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Meats</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allMeats as $meat):?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?php echo $meat->exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $meat->image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.php"><?php echo $meat->title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!--<span class="discount">Rp. 300.000</span> -->
                                            <span class="reguler">€<?php echo $meat->price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $meat->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fishes" class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Fishes</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allFishes as $fish):?>
                                <div class="item">
                                    <div class="card card-product">
                                        <div class="card-ribbon">
                                            <div class="card-ribbon-container right">
                                                <span class="ribbon ribbon-primary">SPECIAL</span>
                                            </div>
                                        </div>
                                        <div class="card-badge">
                                            <div class="card-badge-container left">
                                                <span class="badge badge-default">
                                                    Until <?php echo $fish->exp_date;?>
                                                </span>
                                                <span class="badge badge-primary">
                                                    20% OFF
                                                </span>
                                            </div>
                                            <img src="assets/img/<?php echo $fish->image;?>" alt="Card image 2" class="card-img-top">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="detail-product.php"><?php echo $fish->title;?></a>
                                            </h4>
                                            <div class="card-price">
                                                <!--<span class="discount">Rp. 300.000</span>-->
                                                <span class="reguler">€<?php echo $fish->price;?></span>
                                            </div>
                                            <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $fish->id; ?>" class="btn btn-block btn-primary">
                                                Add to Cart
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="fruits">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Fruits</h2>
                        <div class="product-carousel owl-carousel">
                        <?php foreach($allFruits as $fruit):?>  
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until <?php echo $fruit->exp_date;?>
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="assets/img/<?php echo $fruit->image;?>" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.php"><?php echo $fruit->title;?></a>
                                        </h4>
                                        <div class="card-price">
                                            <!--<span class="discount">Rp. 300.000</span>-->
                                            <span class="reguler">€<?php echo $fruit->price;?></span>
                                        </div>
                                        <a href="<?php echo APPURL; ?>products/detail-product.php?id=<?php echo $fruit->id; ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        charge 

        
 


        <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <title>Pay Page</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
    <div class="container" style="margin-top: none">
        <a class="navbar-brand  text-white" href="#">Pay Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        </div>
    </div>
    </nav>

    <div class="container">  
                    <!-- Replace "test" with your own sandbox Business account app client ID -->
                    <script src="AXXauFP3oNqC0GD0acw7-xjKL636tyqiTM3V4PR4du01TrjPfDaxyhqIMibTyFchBrkLK8_KpFeMHteA"></script>
                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                        // Sets up the transaction when a payment button is clicked
                        createOrder: (data, actions) => {
                            return actions.order.create({
                            purchase_units: [{
                                amount: {
                                value: '<?php echo $_SESSION['total_price'];?>' // Can also reference a variable or function
                                }
                            }]
                            });
                        },
                        // Finalize the transaction after payer approval
                        onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                          
                             window.location.href='index.php';
                            });
                        }
                        }).render('#paypal-button-container');
                    </script>


                  
                </div>
            </div>
        </div>


    <body>
</html>
                  
               

                  
   

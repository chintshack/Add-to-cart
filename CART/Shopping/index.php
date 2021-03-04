<?php

require_once('./php/component.php');
require_once('./php/dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <!--Bootstrap DN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row text-center py-5">

        <!-- <div class="col-md-3 col-sm-6 my-3 my-md-0">
      
        <form action="index.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./upload/product1.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product1</h5>
                    <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </h6>
            <p class="card-text">Some quick example to build one the card</p>
            <h5>
            <small><s class="text-secondary">$599</s></small>
            <span class="price">$519</span>
            </h5>

            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
            </div>
        </form>
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        
        <form action="index.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./upload/product2.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product2</h5>
                    <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </h6>
            <p class="card-text">Some quick example to build one the card</p>
            <h5>
            <small><s class="text-secondary">$599</s></small> 
            <span class="price">$519</span>
            </h5>

            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
            </div>
        </form>
        </div>
        
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        
        <form action="index.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./upload/watchproduct.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product3</h5>
                    <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </h6>
            <p class="card-text">Some quick example to build one the card</p>
            <h5>
            <small><s class="text-secondary">$599</s></small> 
            <span class="price">$519</span>
            </h5>

            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
            </div>
        </form>
        
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        
        <form action="index.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="./upload/iphone.jpg" alt="Image1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Product4</h5>
                    <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    </h6>
            <p class="card-text">Some quick example to build one the card</p>
            <h5>
            <small><s class="text-secondary">$599</s></small>
            <span class="price">$519</span>
            </h5>

            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart<i class="fas fa-shopping-cart"></i></button>

                </div>
            </div>
        </form>
        
        </div> -->

        <?php 
        ?>

   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
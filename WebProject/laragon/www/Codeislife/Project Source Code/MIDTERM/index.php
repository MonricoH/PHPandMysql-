<?php
session_start();
   $arrayShirt = array(
    array(
        'name'          =>'Brown Shirt',
        'descrption'    =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum' ,
        'price'         =>'550',
        'photo1'        =>'produc1A.jpg',
        'photo2'        =>'produc1B.jpg'
    ),
    array(
        'name'          =>'Gray Shirt',
        'descrption'    =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        'price'         =>'550',
        'photo1'        =>'produc2A.jpg',
        'photo2'        =>'produc2B.jpg'
    ),
    array(
        'name'          =>'White Blazer',
        'descrption'    =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut',
        'price'         =>'750',
        'photo1'        =>'produc3A.jpg',
        'photo2'        =>'produc3B.jpg'
    ),
    array(
        'name'          =>'Dark Blue Polo Shirt',
        'descrption'    =>'Dark Blue Polo Shirt - adfhadfhadfhadfhadfhfdhdaafdh',
        'price'         =>'600',
        'photo1'        =>'produc4A.jpg',
        'photo2'        =>'produc4B.jpg'
    ),
    array(
        'name'          =>'Dark Blue Longs sleeves',
        'descrption'    =>'Dark Blue Longs sleeves - fadgadfgafdgadfhadfghdfhafhafd',
        'price'         =>'800',
        'photo1'        =>'produc5A.jpg',
        'photo2'        =>'produc5B.jpg'
    ),
    array(
        'name'          =>'White Longs Sleeves',
        'descrption'    =>'White Longs Sleeves - adfhdfafdgadfgaf',
        'price'         =>'750',
        'photo1'        =>'produc6A.jpg',
        'photo2'        =>'produc6B.jpg'
    ),
    array(
        'name'          =>'Dark Blue Blazer',
        'descrption'    =>'Dark Blue Blazer -sdfsadfsadfasdfsadfsdfsadfsadf',
        'price'         =>'750',
        'photo1'        =>'produc7A.jpg',
        'photo2'        =>'produc7B.jpg'
    ),
    array(
        'name'          =>'Floral Polo',
        'descrption'    =>'Floral Polo - sdahadfhfhhdf',
        'price'         =>'550',
        'photo1'        =>'produc8A.jpg',
        'photo2'        =>'produc8B.jpg'
    )
    );
   

    $_SESSION['arrayShirt'] = $arrayShirt;
?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/styles.css"> 
	<title>OLSHOP</title>
</head>
<body>

	<div class="container pt-5">
 	<div class="row">
    <div class="col-md-10">
        <h3 class=""><i class="fas fa-store"></i> Learn IT Easy Online Shop</h3>
    </div>
    <div class="col-md-2 text-right">
        <a href="cart.php"><button type="button" class="btn btn-primary">
         <i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">0</span>
        </button>
        </a>
     </div>
     </div>
     <hr>
    <div class="row">
         <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=0">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[0]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[0]['photo2']; ?>">
                    </a>
                    <a class="add-to-cart" href="details.php?a=0"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                   <h6><?php echo$arrayShirt[0]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[0]['price']; ?></span></h6>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
              <div class="product-image2">
                  <a href="details.php?a=1">
                      <img class="pic-1" src="img/<?php echo $arrayShirt[1]['photo1']; ?>">
                      <img class="pic-2" src="img/<?php echo $arrayShirt[1]['photo2']; ?>">
                  </a>
                 
                  <a class="add-to-cart" href="details.php?a=1"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[1]['name'];?> <span class="badge badge-secondary"><?php echo$arrayShirt[1]['price']; ?></span></h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=2">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[2]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[2]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=2"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[2]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[2]['price']; ?></span></h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=3">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[3]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[3]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=3"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[3]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[3]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
         <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=4">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[4]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[4]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=4"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[4]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[4]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
         <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=5">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[5]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[5]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=5"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[5]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[5]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
         <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=6">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[6]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[6]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=6"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[6]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[6]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
         <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=7">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[7]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[7]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href="details.php?a=7"><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[7]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[7]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
    </div>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
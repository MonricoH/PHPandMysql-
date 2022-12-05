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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Shop</title>
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

        <?php 
        if (isset($arrayShirt)) {
            foreach ($arrayShirt as $key => $value) {

                





                echo '<div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=0">
                        <img class="pic-1" src="img/' .$arrayShirt[$key]['photo1']. '">
                        <img class="pic-2" src="img/' .$arrayShirt[$key]['photo2']. '">
                    </a>
                    <a class="add-to-cart" href=""><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                   <h6>'.$arrayShirt[$key]['name'].' <span class="badge badge-secondary">'.$arrayShirt[$key]['price'].'</span></h6>
                </div>
            </div>
        </div>';
            }
        }



         ?>






        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="details.php?a=0">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[0]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[0]['photo2']; ?>">
                    </a>
                    <a class="add-to-cart" href=""><i class="fas fa-cart-plus"></i>Add to cart</a>
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
                 
                  <a class="add-to-cart" href=""><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[1]['name'];?> <span class="badge badge-secondary"><?php echo$arrayShirt[1]['price']; ?></span></h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[2]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[2]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href=""><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[2]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[2]['price']; ?></span></h6>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="#">
                        <img class="pic-1" src="img/<?php echo $arrayShirt[3]['photo1']; ?>">
                        <img class="pic-2" src="img/<?php echo $arrayShirt[3]['photo2']; ?>">
                    </a>
                    
                    <a class="add-to-cart" href=""><i class="fas fa-cart-plus"></i>Add to cart</a>
                </div>
                <div class="product-content">
                    <h6><?php echo$arrayShirt[3]['name']; ?> <span class="badge badge-secondary"><?php echo$arrayShirt[3]['price']; ?></span></h6>
                </div>
            </div>
        </div> 
    </div>
</div>





<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
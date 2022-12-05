<?php
session_start();
   $arrayShirt = array(
    array(
        'name'          =>'Brown Shirt',
        'descrption'    =>'Brown Shirt,afsdawtgerrgagergaerg' ,
        'price'         =>'550',
        'photo1'        =>'produc1A.jpg',
        'photo2'        =>'produc1B.jpg'
    ),
    array(
        'name'          =>'Gray Shirt',
        'descrption'    =>'Gray Shirt -agfgfgfa',
        'price'         =>'550',
        'photo1'        =>'produc2A.jpg',
        'photo2'        =>'produc2B.jpg'
    ),
    array(
        'name'          =>'White Blazer',
        'descrption'    =>'White Blazer -gafgfdgasdfhadfhadfhhfhfadhfdah',
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
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container pt-5">
    <div class="row">
      <div class="col-md-10">
        <h2>Shopping Demo-2 </h2>
      </div>
      <div class="col-md-2 text-right">
        <a href="#" class ="btn btn-primary" >
          Cart<span class="badge bg-secondary">0</span>
          
        </a>
          
      </div>
        
        
     
      <hr>
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=0">
                            <img class="pic-1" src="img/<?php echo $arrayShirt[0]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[0]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=0">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[0]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=1">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[1]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[1]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=1">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[1]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=2">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[2]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[2]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=2">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[2]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=3">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[3]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[3]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=3">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[3]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=4">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[4]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[4]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=4">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[1]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=5">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[5]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[5]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=5">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[1]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=6">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[6]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[6]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=1">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[6]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  
            <div class="col-md-3 col-sm-6">
              <div class="card card-container me-1">
                <div  class="product-grid2">
                    <div class="product-image2">
                        <a name="ac" href="link-sampl.php?a=7">
                            <img class="pic-1" src="img/<?php echo$arrayShirt[7]['photo1']; ?>">
                            <img class="pic-2" src="img/<?php echo$arrayShirt[7]['photo2']; ?>">
                        </a>
                        <a  class="add-to-cart" href="link-sampl.php?a=7">Add to cart</a>
                     
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo$arrayShirt[1]['name']; ?></a></h3>
                    </div>
                </div>
              </div>
            </div>  

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
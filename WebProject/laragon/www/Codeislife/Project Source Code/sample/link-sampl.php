<?php
    session_start();
    $arrayShirt =$_SESSION['arrayShirt'];
    $pk = $_GET['a'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shope/Details</title>
</head>
<body>
<div class="container">
        <div class="row">
             <div class="col-sm-10 col-md-10">
                <h2><i class="fas fa-store"></i>Online Shope</h2>
             </div>
             <div class="col-sm-2 col-md-2 text-right">
                 <form method="get">
                    <button type="submit" name=""class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i>Cart <span class="badge bg-secondary">0</span>
                    </button>
                 </form>   
             </div> 
             <hr>




            <div class="col-md-4 col-sm-5">
                <div class="product-grid2 product-grid3">
                    <div class="product-image2">
                        <img class="" src="img/<?php echo $arrayShirt[$pk]['photo2']; ?>">
                    </div>
                </div>
            </div>






            <div class="col-md-8 col-sm-7">
                <?php echo '<h3>'. $arrayShirt[$pk]['name'] . $arrayShirt[$pk ]['price'] .'</h3>'; 
                ?>
                <p><?php echo $arrayShirt[$pk]['descrption']?></p>
                <hr>
                <h3>Select Size:</h3>
                <form method="get">  
                    <hr>
                    <button type="submit" name="" id="" class="">Confirm Product Purchase</button>
                    <button type="submit" name="" id="" class="">Cancel/Go Back</button>      
                </form>
            </div>  



              
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
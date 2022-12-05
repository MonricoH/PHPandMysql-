<?php
session_start();
$arrayShirt =$_SESSION['arrayShirt'];
$pk = $_GET['a'];

$size = array('XS','SM','MD','LG','XL' );





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Details</title>
</head>
<body>
   <div class="container pt-5">
    <div class="row">
    <div class="col-md-10">
        <h3 class=""><i class="fas fa-store"></i> Learn IT Easy Online Shop</h3>
    </div>
    <div class="col-md-2 text-right">
        <button type="button" class="btn btn-primary">
         <i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">0</span>
        </button>
     </div>
     </div>
    <hr>




<form method="get"> 
    <div class="row">
        <div class="col-md-4 col-sm-5">
            <div class="product-grid2">
                    <div class="product-image2">
                        <img class="" src="img/<?php echo $arrayShirt[$pk]['photo1']; ?>">
                    </div>
                </div>
        </div>

        <div class="col-md-8 col-sm-7">
           <?php echo '<h3>'. $arrayShirt[$pk]['name'] .$arrayShirt[$pk ]['price'] .'</h3>'; 
                ?>
                <p><?php echo $arrayShirt[$pk]['descrption']?></p>
                <hr>


                <h3>Select Size:</h3>
                <input type="radio" name="rd" id="rdname" value="">
                <label for="rdname">XS</label>
               




                <hr>
                <h3>Enter Quantity:</h3>    
                <input type="number" name="" id="txtQuantity" value="0">



                 
                    <hr>
                    
                    <button type="submit" name="btnconfirm" id="" class="btn btn-dark"><i class="fas fa-check-circle"></i> Confirm Product Purchase</button>
                    
                    <button type="submit" name="btncancel" id="" class="btn btn-danger">Cancel/Go Back</button>  

                        <?php
                        if(isset($_GET['btncancel'])){
                            header('location: index.php');
                        }
                        if(isset($_GET['btnconfirm'])){
                            header('location: confirm.php');
                        }
                        
                    

                        ?>
               
        </div>
       
       
    </div>
</form>
</div>





<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
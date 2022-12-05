<?php
session_start();
 $arrayShirt =$_SESSION['arrayShirt'];
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Confirm</title>
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
        
		<h3>Product Successfully Added to the Cart, what do you want to do next?</h3>
        <div class="col-md-8 col-sm-7">
           	
                    <button type="submit" name="btnviewcart" id="" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> View Cart</button>
                    <button type="submit" name="btnshopcon" id="" class="btn btn-danger"><i class="fas fa-shopping-bag"></i> Continue Shopping</button>
                    <?php
                    if(isset($_GET['btnshopcon'])){
                            header('location: index.php');
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
<?php
session_start();
$arrayShirt =$_SESSION['arrayShirt'];


if(isset($_GET['Continue'])){
  header('location: index.php');
    }


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
        <a href="cart.php">
        <button type="button" class="btn btn-primary">
         <i class="fas fa-shopping-cart"></i> Cart <span class="badge badge-light">0</span>
        </button>
        </a>
     </div>
     </div>
    <hr>
<form method="get"> 
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td>In stock</td>

                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right">124,90 €</td>
                            <td></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right">33,90 €</td>
                            <td></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>In stock</td>
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right">70,00 €</td>
                            <td></td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>     
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>346,90 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12 col-md-4 text-right">
                    <button class="btn btn-lg btn-block btn btn-danger " name="Continue"><i class="fas fa-shopping-bag"></i> Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-4 text-right">
                    <button class="btn btn-lg btn-block btn-success " name=""><i class="fas fa-edit"></i> Update Cart</button>
                </div>
                <div class="col-sm-12 col-md-4 text-right">
                    <button class="btn btn-lg btn-block btn-primary "><i class="fas fa-sign-out-alt"></i>Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
                        
               
</div>
       
       
</div>
</form>
</div>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
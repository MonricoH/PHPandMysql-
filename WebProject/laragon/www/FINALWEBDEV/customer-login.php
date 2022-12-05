<?php 



if (isset($_POST['btnlogin'])) {



    require_once('open-con.php');

    $username = htmlspecialchars($_POST['txtUsername']);
    $password = htmlspecialchars($_POST['txtPassword']);

    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
     $password = md5($password);


    


            $str = " SELECT * FROM tbl_customer
                     WHERE emailAddress = '$username'
                    AND password = '$password'
    ";

            
           



            if ($rsLogin = mysqli_query($con, $str )) {
                if (mysqli_num_rows($rsLogin) > 0) {
                header("Location: shopping.php");
                mysqli_free_result($rsLogin);


                }
                else
                   echo 'Invalid Username/Password';
                    
            }
            else
                echo 'Error could not execute yor req';



            require_once('close-con.php');




}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="static-login.css">
    <title>For Customer</title>
</head>
<body>    

    <div class="container">
        <div class="card card-container">
            <h5>For Customer</h5>
            <form id="profile-img" method="post">
                <input type="text" name="txtUsername" class="form-control" placeholder="Enter email" required autofocus><br>
                <input type="password" name="txtPassword" class="form-control" placeholder="Password" required><br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnlogin">LOG IN</button><br><br>
                <p>Admin <a href="index.php"> Login</a></p>





            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
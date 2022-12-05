<?php
session_start();






    $userType = array('Admin', 'Content Manager', 'System User');
   /*Two Dimensional array*/
    $users = array(        
        array(
            'userType' => 'Admin',
            'username'  => 'admin',
            'password'  => 'Pass1234'
        ),
        array(
            'userType' => 'Admin',
            'username'  => 'renmark',
            'password'  => 'Pogi1234'
        ),
        array(
            'userType' => 'Content Manager',
            'username'  => 'pepito',
            'password'  => 'manaloto'
        ),
        array(
            'userType' => 'Content Manager',
            'username'  => 'juan',
            'password'  => 'delacruz'
        ),
        array(
            'userType' => 'System User',
            'username'  => 'pedro',
            'password'  => 'penduko'
        ),
        array(
            'userType' => 'System User',
            'username'  => 'shai',
            'password'  => 'bytes123'
        )
    );

    if(isset($_POST['btnSignIn'])) {
        $validUser = false; //flag
        if(isset($users)) {
            foreach($users as $key => $user) {
                if($user['userType'] == $_POST['drpUserType'] && $user['username'] == $_POST['txtUserName'] && $user['password'] == $_POST['txtPassword']) {
                    $validUser = true;
                    $_SESSION['username'] = $user['username'];
                    header('location: home.php');
                    break;
                }
            }            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Static Login</title>
</head>
<body>    
    <div class="container">
        <div class="row mt-4">
            <?php if(isset($validUser) && $validUser == true): ?>
                <div class="offset-4 col-4">
                    <div class="alert alert-success alert-dismissible  fade show" role="alert">
                        Welcome to the System: <?php echo $user['username']; ?> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php elseif(isset($validUser) && $validUser == false): ?>
                <div class="offset-4 col-4">
                    <div class="alert alert-danger alert-dismissible  fade show" role="alert">
                        Invalid Username / Password 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="card card-container">            
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">            
                <select name="drpUserType" id="drpUserType" class="form-control" >
                    <?php
                        if(isset($userType)) {
                            foreach($userType as $key => $value) 
                                echo '<option value="' . $value  . '">' . $value . '</option>';
                        }
                    ?>
                </select>
                <input type="text" name="txtUserName" id="txtUserName" class="form-control" placeholder="User Name" required>
                <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="Password" required>                
                <button name="btnSignIn" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>            
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
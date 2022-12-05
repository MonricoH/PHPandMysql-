<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="css/custom-login.css">
  <title>STATIC LOG IN</title>
</head>
<body>
  <div class="wrapper">
    <div id="formContent">
        <img src="img/img1.png" id="icon" alt="avatar" class="avatar" />

      <!-- Login Form -->
      <form method="post">

        <select name ="usertype" id="users">
          <option name="Admin">Admin</option>
          <option>Content Manager</option>
          <option>System User</option>
        </select>
        <input type="text" id="uname" name="uname" placeholder="Username" required="">
        <input type="password" id="pass" name="pass" placeholder="Password" required="">
        <input type="submit" name ="btnSubmit" value="Log In">

        <?php if(isset($_POST['btnSubmit'])): ?>
          <?php

            if(($_POST['usertype'] == 'Admin' and ($_POST['uname'] == 'admin') and ($_POST['pass'] == 'admin1234')))


          ?>
          <div class="alert alert-success" role="alert">
              Successfully login as Administrator!
          </div>
        <?php endif; ?>
      </form>
    </div>
</div>


  <!--
    USER TYPE         Username      Password

    Admin           admin       admin1234
    Content Manager       adminjay      admin4321
    System User         jayson        user1234

  -->


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
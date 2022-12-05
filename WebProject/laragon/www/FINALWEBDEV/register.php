<?php  
if (isset($_POST['btnadd'])) {
$firstname = htmlspecialchars($_POST['txtfirstname']);
$lastname = htmlspecialchars($_POST['txtlastname']);
$email = htmlspecialchars($_POST['txtemail']);
$pwd = $_POST['pass'];
$bday = $_POST['birthday'];
$sex = htmlspecialchars($_POST['drpsex']);
$address = $_POST['txtaddress'];
$phone = $_POST['telphone'];






  $err = [];
  if (empty($firstname))
    $err[] = "Lastname is req";

  if(empty($lastname))
    $err[] = "firstname is req";
  if(empty($email))
    $err[] = "email is address  is req";
  
  if (empty($err)) {
    require('open-con.php');
    $pwd = htmlspecialchars($_POST['pass']);
    $pwd = stripcslashes($pwd);
    $pwd = mysqli_real_escape_string($con, $pwd);
  
    $pwd = md5($pwd);
    
    $strsql = "
      INSERT INTO tbl_customer (firstName,lastName,emailAddress,password,birthday,sex,address,mobileNumber)
      VALUES ('$firstname','$lastname','$email','$pwd','$bday','$sex','$address','$phone')
    ";

  if(mysqli_query($con, $strsql))
    header('location: customer-login.php');
  else
    $err[] = 'ERROR';


    require('close-con.php');
  }
}
?>








<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ADD PERSON</title>
</head>
<body>
  <h1>Sign Up</h1>
  <hr>
  <form method="post">
    <input type="text" name="txtfirstname" id="txtfirstname" placeholder="First Name" required><br>
    <input type="text" name="txtlastname" id="txtlastname" placeholder="Last Name" required><br>
     <input type="email" name="txtemail" id="txtemail" placeholder="Email Adress" required><br>
     <input  type="password" name="pass" id="pass" placeholder="Password" required=""><br>
    <input type="date" name="birthday"  id="birthday"><br>
    <select name="drpsex">
      <option value="Male" selected>Male</option>
      <option value="Female">Female</option>
    </select><br>
    <input type="text" name="txtaddress" id="txtaddress" placeholder="Adress" required><br>
    <input type="tel" name="telphone" id="telphone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone# Format: 123-45-678"><br>






    <input type="submit" name="btnadd" value="add person">
    <a href="index.php">Cancel</a>
  </form>
</body>
</html>



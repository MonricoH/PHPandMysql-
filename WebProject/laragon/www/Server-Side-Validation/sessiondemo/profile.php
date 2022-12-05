<?php 

	session_start();


	if(!isset($_SESSION['username']))
	header('location: login.php');


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body>
	<a href="home.php">Home</a>
	<a href="profile.php">profile</a>
	<a href="Logout.php">Log out</a>
	<hr>

	<h1>Profile</h1>
	<p>Welcome, <?php  echo $_SESSION['username'];?></p>
</body>
</html>
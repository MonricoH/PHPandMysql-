<?php  
if (isset($_POST['btnadd'])) {
	$lastname = htmlspecialchars($_POST['txtlastname']);
	$firstname = htmlspecialchars($_POST['txtfirstname']);
	$sex = htmlspecialchars($_POST['drpsex']);
	$email = htmlspecialchars($_POST['txtemail']);

	$err = [];
	if (empty($lastname))
		$err[] = "Lastname is req";

	if(empty($firstname))
		$err[] = "firstname is req";
	if(empty($email))
		$err[] = "email is address  is req";
	
	if (empty($err)) {
		require('open-connection.php');

		$strsql = "
			INSERT INTO persons(lastname,firstname,sex,email)
			VALUES ('$lastname','$firstname','$sex','$email')
		";

	if(mysqli_query($con, $strsql))
		header('location: clear-add-person.php');
	else
		$err[] = 'ERROR';


		require('close-connection.php');
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
	<h1>ADD PERSON</h1>
	<hr>
	<form method="post">
		<input type="text" name="txtlastname" id="txtlastname" placeholder="Last Name" required><br>
		<input type="text" name="txtfirstname" id="txtfirstname" placeholder="First Name" required><br>
		<select name="drpsex">
			<option value="Male" selected>Male</option>
			<option value="Female">Female</option>
		</select><br>
		<input type="email" name="txtemail" id="txtemail" placeholder="Email Adress" required><br>
		<input type="submit" name="btnadd" value="add person">
	</form>
</body>
</html>
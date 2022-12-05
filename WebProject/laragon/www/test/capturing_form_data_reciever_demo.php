<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Data receive</title>
</head>
<body>
	<?php 
/*
		$firstname = $_GET['txtFirstname'];
		$lastname = $_GET['txtLastname'];
		$sex = $_GET['radsex'];

		if ($sex == 'Male') 
			echo "hello , sir $firstname $lastname";
		else
			echo "hello , maam $firstname $lastname"; */



		$firstname = $_REQUEST['txtFirstname'];
		$lastname = $_REQUEST['txtLastname'];
		$sex = $_REQUEST['radsex'];

		if ($sex == 'Male') 
			echo "hello , sir $firstname $lastname";
		else
			echo "hello , maam $firstname $lastname";
		

	?>

</body>
</html>
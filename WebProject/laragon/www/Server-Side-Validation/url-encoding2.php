<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL</title>
</head>
<body>
	<h2>WelcomeBack</h2>
	<?php 
	if ($_GET['sex'] == 'male') 
		echo 'sir ' . $_GET['fname'] . ' ' . $_GET['lname'];
	else
		echo 'maam' . $_GET['fname'] . ' ' . $_GET['lname'];

	 ?>

</body>
</html>
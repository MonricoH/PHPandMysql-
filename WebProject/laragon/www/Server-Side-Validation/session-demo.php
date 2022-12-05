<?php
	session_start();

	$_SESSION['username'] = 'admin';
	$_SESSION['firstname'] = 'mm';
	$_SESSION['lastname'] = 'humilde';
	echo $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session Demo</title>
</head>
<body>


</body>
</html>